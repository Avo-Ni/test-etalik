<?php

namespace App\Controller;

use App\Entity\ExcelData;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Exception;

class SpreadSheetController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="app_spreadsheet")
     */
    public function index(): Response
    {
        return $this->render('spread_sheet/index.html.twig', [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/SpreadsheetController.php',
        ]);
    }

    /**
     * @Route("/upload-excel", name="xlsx", methods={"POST", "OPTIONS"})
     */
    public function uploadExcel(Request $request): Response
    {
        $file = $request->files->get('file');
        $fileFolder = $this->getParameter('kernel.project_dir') . '/public/uploads/';
        $filePathName = md5(uniqid()) . '.' . $file->getClientOriginalExtension();

        try {
            $file->move($fileFolder, $filePathName);
        } catch (FileException $e) {
            return $this->json('File not uploaded', 400);
        }

        $spreadsheet = IOFactory::load($fileFolder . $filePathName);
        $spreadsheet->getActiveSheet()->removeRow(1);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        foreach ($sheetData as $row) {
            $excelData = $this->createExcelDataFromRow($row);
            $this->entityManager->persist($excelData);
        }

        $this->entityManager->flush();

        return $this->redirectToRoute('app_list');
    }

    private function createExcelDataFromRow(array $row): ExcelData
    {
        $excelData = new ExcelData();
        $excelData->setCompteAffaire($row['A'] ?? null);
        $excelData->setCompteEvenement($row['B'] ?? null);
        $excelData->setCompteDernierEvenement($row['C'] ?? null);
        $excelData->setNumeroFiche($row['D'] ?? null);
        $excelData->setLibelleCivilite($row['E'] ?? null);
        $excelData->setProprietaireVehicule($row['F'] ?? null);
        $excelData->setNom($row['G'] ?? null);
        $excelData->setPrenom($row['H'] ?? null);
        $excelData->setNumeroNomVoie($row['I'] ?? null);
        $excelData->setComplementAdresse1($row['J'] ?? null);
        $excelData->setCodePostal($row['K'] ?? null);
        $excelData->setVille($row['L'] ?? null);
        $excelData->setTelephoneDomicile($row['M'] ?? null);
        $excelData->setTelephonePortable($row['N'] ?? null);
        $excelData->setTelephoneJob($row['O'] ?? null);
        $excelData->setEmail($row['P'] ?? null);

        $dateFields = ['Q' => 'DateMiseCirculation', 'R' => 'DateAchat', 'S' => 'DateDernierEvenement', 'AH' => 'DateEvenement'];
        foreach ($dateFields as $column => $propertyName) {
            try {
                if (!empty($row[$column])) {
                    $date = $this->createDateTime($row[$column]);
                    if ($date instanceof DateTime) {
                        $setter = 'set' . $propertyName;
                        $excelData->$setter($date);
                    } else {
                        throw new Exception('Failed to parse date from row ' . $column);
                    }
                }
            } catch (Exception $e) {
                throw new Exception('Error processing date: ' . $e->getMessage());
            }
        }
        $excelData->setLibelleMarque($row['T'] ?? null);
        $excelData->setLibelleModele($row['U'] ?? null);
        $excelData->setVersion($row['V'] ?? null);
        $excelData->setVin($row['W'] ?? null);
        $excelData->setImmatriculation($row['X'] ?? null);
        $excelData->setTypeProspect($row['Y'] ?? null);
        $excelData->setKilometrage($row['Z'] ?? null);
        $excelData->setLibelleEnergie($row['AA'] ?? null);
        $excelData->setVendeurVN($row['AB'] ?? null);
        $excelData->setVendeurVO($row['AC'] ?? null);
        $excelData->setCommentaireFacturation($row['AD'] ?? null);
        $excelData->setTypeVNVO($row['AE'] ?? null);
        $excelData->setNumeroDossierVNVO($row['AF'] ?? null);
        $excelData->setIntermediaireVenteVN($row['AG'] ?? null);
        $excelData->setOrigineEvenement($row['AI'] ?? null);

        return $excelData;
    }

    private function createDateTime(string $dateString): ?DateTime
    {
        $date = DateTime::createFromFormat('m/d/Y', $dateString);
        if ($date instanceof DateTime) {
            return $date;
        }
        return null;
    }
}
