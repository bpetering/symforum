<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Entity\Thread;
use App\Entity\User;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function createPost(Request $request, ValidatorInterface $validator): RedirectResponse
    {
        $post = new Post();

        $text = $request->request->get('text');
        $threadId = $request->request->get('thread_id');
        $authorId = $request->request->get('author_id');

        $post->setText($text);
        
        $thread = $this->getDoctrine()
                ->getRepository(Thread::class)
                ->find($threadId);
        if (!$thread) {
            throw $this->createNotFoundException('No thread with ID ' . $threadId . ' found');
        }
        $post->setThread($thread);

        $author = $this->getDoctrine()
                ->getRepository(User::class)
                ->find($authorId);
        if (!$author) {
            throw $this->createNotFoundException('No author with ID ' . $authorId . ' found');
        }
        $post->setAuthor($author);

        $post->setTime(new \DateTime());

        $errors = $validator->validate($post);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($post);
        $entityManager->flush();

        return $this->redirectToRoute('thread', ['id' => $threadId]);
    }
}

