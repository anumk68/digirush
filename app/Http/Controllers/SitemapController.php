<?php


  namespace App\Http\Controllers;
  
  use Illuminate\Support\Facades\File;
  use App\Models\Blog;
  use App\Models\Course;
  use App\Models\Notices;
  
  class SitemapController extends Controller
  {
      /**
       * Generate the sitemap content as a string.
       *
       * @return string
       */
      protected function generateSitemapContent()
      {
          $blogs = Blog::latest()->get();
          $courses = Course::latest()->get();
          $notices = Notices::latest()->get(); 
  
          return view('sitemap', [
              'blogs' => $blogs,
              'courses' => $courses,
              'notices' => $notices
          ])->render();
      }
  
      /**
       * Update the sitemap file.
       *
       * @return void
       */
      public function updateSitemap()
      {
          $sitemapContent = $this->generateSitemapContent();
          $filePath = public_path('sitemap.xml');
          File::put($filePath, $sitemapContent);
      }
  
      /**
       * Handle requests to view the sitemap XML.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $sitemapContent = $this->generateSitemapContent();
  
          return response($sitemapContent, 200)
              ->header('Content-Type', 'application/xml');
      }
  }
  