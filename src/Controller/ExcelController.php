<?php

namespace App\Controller;

use App\Entity\ExcelData;
use App\Form\ExcelDataType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExcelController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/list", name="app_list")
     */
    public function index(): Response
    {
        return $this->render('excel/view.html.twig');
    }

    /**
     * @Route("/excels", name="excels_list", methods={"GET"})
     */
    public function list(): JsonResponse
    {
        $excels = $this->getDoctrine()
            ->getRepository(ExcelData::class)
            ->findAll();

        $data = array_map(function (ExcelData $excel) {
            return $this->mapExcelData($excel);
        }, $excels);

        return new JsonResponse($data);
    }

    /**
     * @Route("/excels/{id}", name="excels_show", methods={"GET"})
     */
    public function show(ExcelData $excelData): JsonResponse
    {
        return new JsonResponse($this->mapExcelData($excelData));
    }

    /**
     * @Route("/excels/{id}/edit", name="excels_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $excelData = $entityManager->getRepository(ExcelData::class)->find($id);

        if (!$excelData) {
            throw $this->createNotFoundException('L\'entité ExcelData avec l\'id ' . $id . ' n\'existe pas.');
        }

        try {
            $form = $this->createForm(ExcelDataType::class, $excelData);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();

                return $this->redirectToRoute('app_list');
            }

            return $this->render('excel/modif.html.twig', [
                'excel_data' => $excelData,
                'form' => $form->createView(),
            ]);
        } catch (\Exception $e) {
            return new Response($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * @Route("/excels/{id}", name="excels_delete", methods={"DELETE"})
     */
    public function delete(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->attributes->get('id');
        $excelData = $entityManager->getRepository(ExcelData::class)->find($id);

        if (!$excelData) {
            throw $this->createNotFoundException('L\'entité ExcelData avec l\'id '.$id.' n\'existe pas.');
        }

        $entityManager->remove($excelData);
        $entityManager->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);
    }

    private function mapExcelData(ExcelData $excel): array
    {
        $data = [];
        $reflectionClass = new \ReflectionClass($excel);
        foreach ($reflectionClass->getProperties() as $property) {
            $propertyName = $property->getName();
            $getter = 'get' . ucfirst($propertyName);
            if (method_exists($excel, $getter)) {
                $data[$propertyName] = $excel->$getter();
            }
        }
        return $data;
    }
}
