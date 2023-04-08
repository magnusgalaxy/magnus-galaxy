<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;

class BlogController extends Controller
{
    public function index(){
        //SEO Tags
        SEOTools::setTitle('Blogs');
        SEOTools::setDescription("Explore the latest posts and updates on PHP, Laravel, Reactjs, Angular, and other programming languages on Magnus Galaxy's blogs page. Stay updated with our insightful articles and tutorials.");
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@magnusgalaxy');
        SEOTools::jsonLd()->addImage(asset('assets/site-images/logo.svg'));
        

        $blogs = Blog::with('categories')->paginate(20);

        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog){
        $categories = $blog->categories;
 
        SEOMeta::setTitle($blog->meta_title ?? $blog->title);
        SEOMeta::setDescription($blog->meta_description);
        SEOMeta::addMeta('article:published_time', $blog->created_at, 'property');
        foreach($categories as $category){
            SEOMeta::addMeta('article:section', $category->name, 'property');
        }
        SEOMeta::addKeyword([$blog->keywords]);

        OpenGraph::setDescription($blog->meta_description);
        OpenGraph::setTitle($blog->meta_title ?? $blog->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage(asset('assets/site-images/logo.svg'));

        JsonLd::setTitle($blog->meta_title ?? $blog->title);
        JsonLd::setDescription($blog->meta_description);
        JsonLd::setType('Article');
        JsonLd::addImage(asset('assets/site-images/logo.svg'));

        return view('blogs.show', compact('blog'));
    }
}
