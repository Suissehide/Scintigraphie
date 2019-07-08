<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Entity\Verification;
use App\Entity\Qcm;
use App\Entity\Pack;

use App\Form\ParticipantType;
use App\Form\VerificationType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ParticipantController extends AbstractController
{
    /**
     * @Route("/participant/add", name="participant_add", methods="GET|POST")
     */
    public function add(Request $request): Response
    {
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);

        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('save')->isClicked()) {
                $participant = $form->getData();

                // $this->verification_create($participant);

                $em->persist($participant);
                $em->flush();
            }
            return $this->redirectToRoute('participant_view', ['id' => $participant->getId()]);
        }
        return $this->render('participant/create.html.twig', [
            'title' => 'Ajouter un participant',
            'controller_name' => 'ParticipantController',
            'form' => $form->createView(),
            'verification' => $form->createView(),
        ]);
    }

    private function verification_create(Participant $participant)
    {
        $em = $this->getDoctrine()->getManager();
        $verification = new Verification();

        $pack = new Pack();

        $qcm = new Qcm();
        $qcm->setQuestion("Patients (homme ou femme) âgés de plus de 80 ans");
        $qcm->setReponse("oui");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Patient présentant un premier ECV (Infarctus du myocarde - IDM) d’origine athéromateuse datant de 6 mois (+/- 15 jours)");
        $qcm->setReponse("oui");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Absence de preuve pour une hémopathie maligne avérée (connue ou révélée sur les résultats de NFS)");
        $qcm->setReponse("oui");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Sujet affilié ou bénéficiaire d’un régime de sécurité sociale");
        $qcm->setReponse("oui");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Signature du consentement éclairé, Date ");
        $qcm->setReponse("oui");
        $pack->addQcm($qcm);

        $verification->setInclusion($pack);

        $pack = new Pack();

        $qcm = new Qcm();
        $qcm->setQuestion("Patient ayant présenté un ECV d’origine non-athéromateuse (dissection, embolique, ...)");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Patient présentant un diabète mal équilibré (HbA1c > 10%)");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Patient ayant présenté un ou plusieurs ECV avant 80 ans : IDM, coronaropathie, AOMI, sténose carotidienne significative, accident vasculaire cérébral (AVC) d’origine athéromateuse");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Patient présentant une hémopathie maligne manifeste (connue ou révélée sur les résultats de NFS)");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Patient présentant une maladie inflammatoire chronique (cancer, vascularite, rhumatismale, hépato-gastro-intestinales)");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Patient traité par anti-inflammatoire au long cours (Corticoïdes, Anti-inflammatoires non stéroïdiens, Aspirine > 325mg/jour, Inhibiteurs de la cyclo-oxygénase II)");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Personne placée sous sauvegarde de justice, tutelle ou curatelle");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Personne étant dans l’incapacité de donner son consentement");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);
        $qcm = new Qcm();
        $qcm->setQuestion("Sujet non coopérant");
        $qcm->setReponse("non");
        $pack->addQcm($qcm);

        $verification->setNonInclusion($pack);

        $em->persist($verification);
        $em->flush();
        $participant->setVerification($verification);
    }

    /**
     * @Route("/participant/{id}", name="participant_view")
     */
    public function index(Participant $participant, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('validation')->isClicked()) {
                $participant = $form->getData();
                $em->flush();
            }
            return $this->redirect($request->getUri());
        }

        return $this->render('participant/index.html.twig', [
            'controller_name' => 'ParticipantController',
            'participant' => $participant,
            'form' => $form->createView(),
            'date' => date("d/m/Y"),
        ]);
    }

    /**
     * @Route("/{id}", name="participant_delete", methods="DELETE")
     */
    public function delete(Request $request, Participant $participant) : Response
    {
        dump($this->isCsrfTokenValid('delete' . $participant->getId(), $request->request->get('_token')));
        
        if ($this->isCsrfTokenValid('delete' . $participant->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($participant);
            $em->flush();
        }

        return $this->redirectToRoute('index_participant');
    }
}
