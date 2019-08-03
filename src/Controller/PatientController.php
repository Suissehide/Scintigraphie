<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Entity\Qcm;
use App\Entity\QcmDate;
use App\Entity\Pack;
use App\Entity\Cardiovasculaire;
use App\Entity\Suivi;

use App\Form\PatientType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PatientController extends AbstractController
{
    /**
     * @Route("/patient/add", name="patient_add", methods="GET|POST")
     */
    public function add(Request $request): Response
    {
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient);

        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('save')->isClicked()) {
                $patient = $form->getData();

                $this->cardiovasculaire_create($patient);
                $this->suivi_create($patient);

                $em->persist($patient);
                $em->flush();
            }
            return $this->redirectToRoute('patient_view', ['id' => $patient->getId()]);
        }
        return $this->render('patient/create.html.twig', [
            'title' => 'Ajouter un patient',
            'controller_name' => 'PatientController',
            'form' => $form->createView(),
            'verification' => $form->createView(),
        ]);
    }

    private function suivi_create(Patient $patient)
    {
        $em = $this->getDoctrine()->getManager();
        $suivi = new Suivi();

        $pack = new Pack();

        $qcm = new QcmDate();
        $qcm->setQuestion("IDM-SCA");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Angor stable");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Angioplastie coronaire");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Pontage coronaire");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Insuffisance cardiaque stade III ou IV");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("AVC");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("AIT");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Endartériectomie carotidienne");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Artérite des membres inférieurs");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Angioplastie périphérique");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Pontage périphérique");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Anévrisme aorte abdominale");
        $pack->addQcmDate($qcm);
        $qcm = new QcmDate();
        $qcm->setQuestion("Décès");
        $pack->addQcmDate($qcm);  

        $suivi->setEvenements($pack);

        $em->persist($suivi);
        $em->flush();
        $patient->setSuivi($suivi);
    }

    private function cardiovasculaire_create(Patient $patient)
    {
        $em = $this->getDoctrine()->getManager();
        $cardiovasculaire = new Cardiovasculaire();

        $pack = new Pack();

        $qcm = new Qcm();
        $qcm->setQuestion("IDM-SCA");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Angor stable");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Angioplastie coronaire");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Pontage coronaire");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Insuffisance cardiaque stade III ou IV");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("AVC");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("AIT");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Endartériectomie carotidienne");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Artérite des membres inférieurs");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Angioplastie périphérique");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Pontage périphérique");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Antécédent de fibrillation auriculaire");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Antécédent d’insuffisance cardiaque");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Valvulopathie (>grade 2 ou >modérée)");
        $pack->addQcm($qcm);

        $cardiovasculaire->setAntecedents($pack);

        $pack = new Pack();

        $qcm = new Qcm();
        $qcm->setQuestion("Sus décalage ST");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Antérieur");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Septo-apical");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Latéral");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Inférieur");
        $pack->addQcm($qcm);

        $cardiovasculaire->setPrecisions($pack);

        $em->persist($cardiovasculaire);
        $em->flush();
        $patient->setCardiovasculaire($cardiovasculaire);
    }

    /**
     * @Route("/patient/{id}", name="patient_view")
     */
    public function index(Patient $patient, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('validation')->isClicked()) {
                $patient = $form->getData();
                $em->flush();
            }
            return $this->redirect($request->getUri());
        }

        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
            'patient' => $patient,
            'form' => $form->createView(),
            'date' => date("d/m/Y"),
        ]);
    }

    /**
     * @Route("/{id}", name="patient_delete", methods="DELETE")
     */
    public function delete(Request $request, Patient $patient) : Response
    {
        dump($this->isCsrfTokenValid('delete' . $patient->getId(), $request->request->get('_token')));
        
        if ($this->isCsrfTokenValid('delete' . $patient->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patient);
            $em->flush();
        }

        return $this->redirectToRoute('index_patient');
    }
}
