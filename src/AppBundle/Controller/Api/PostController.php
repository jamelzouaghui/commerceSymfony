<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Doctrine\ORM\Mapping\Annotation;

class PostController extends Controller {

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="Get the list of all posts",
     *     section="posts"
     * )
     *
     * @Route("/api/posts",name="list_posts")
     * @Method({"GET"})
     */
    public function listPost() {

        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();

        if (!count($posts)) {
            $response = array(
                'code' => 1,
                'message' => 'No posts found!',
                'errors' => null,
                'result' => null
            );


            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }


        $data = $this->get('jms_serializer')->serialize($posts, 'json');

        $response = array(
            'code' => 0,
            'message' => 'success',
            'errors' => null,
            'result' => json_decode($data)
        );

        return new JsonResponse($response, 200);
    }

    /**
     * @ApiDoc(
     * description="Create a new post",
     *
     *    statusCodes = {
     *        201 = "Creation with success",
     *        400 = "invalid form"
     *    },
     *    responseMap={
     *         201 = {"class"=Post::class},
     *
     *    },
     *     section="posts"
     *
     *
     * )
     *
     * @param Request $request
     * @return JsonResponse
     * @Route("/api/post/new",name="create_post")
     * @Method({"POST"})
     */
    public function createPost(Request $request) {
        $data = $request->getContent();
        $post = $this->get('jms_serializer')->deserialize($data, 'AppBundle\Entity\Post', 'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        $response = array(
            'code' => 0,
            'message' => 'Post created!',
            'errors' => null,
            'result' => null
        );

        return new JsonResponse($response, Response::HTTP_CREATED);
    }

    /**
     * @ApiDoc(
     * description="Edit a  post",
     *
     *    statusCodes = {
     *        201 = "update with success",
     *        400 = "invalid form"
     *    },
     *    responseMap={
     *         201 = {"class"=Post::class},
     *
     *    },
     *     section="posts"
     *
     *
     * )
     *
     * @param Request $request
     * @return JsonResponse
     * @Route("/api/post/update/{id}",name="update_post")
     * @Method({"PUT"})
     */
     public function updatePost(Request $request,$id)
    {

        $post=$this->getDoctrine()->getRepository('AppBundle:Post')->find($id);

        if (empty($post))
        {
            $response=array(
                'code'=>1,
                'message'=>'Post Not found !',
                'errors'=>null,
                'result'=>null

            );

            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }

        $body=$request->getContent();


        $data=$this->get('jms_serializer')->deserialize($body,'AppBundle\Entity\Post','json');
        
        $post->setTitle($data->getTitle());
        $post->setDescription($data->getDescription());

        $em=$this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        $response=array(

            'code'=>0,
            'message'=>'Post updated!',
            'errors'=>null,
            'result'=>null

        );

        return new JsonResponse($response,200);

    }
    
    
    /**
     * @ApiDoc(
     * description="Delete a  post",
     *
     *    statusCodes = {
     *        201 = "delete with success",
     *        400 = "invalid form"
     *    },
     *    responseMap={
     *         201 = {"class"=Post::class},
     *
     *    },
     *     section="posts"
     *
     *
     * )
     *
     * @param Request $request
     * @return JsonResponse
     * @Route("/api/post/delete/{id}",name="delete_post")
     * @Method({"DELETE"})
     */
     public function deletePost(Request $request,$id)
    {

        $post=$this->getDoctrine()->getRepository('AppBundle:Post')->find($id);

        if (empty($post))
        {
            $response=array(
                'code'=>1,
                'message'=>'Post Not found !',
                'errors'=>null,
                'result'=>null

            );

            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }

        $em=$this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        $response=array(

            'code'=>0,
            'message'=>'Post updated!',
            'errors'=>null,
            'result'=>null

        );

        return new JsonResponse($response,200);

    }
}
