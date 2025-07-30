<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicPage;
use App\Models\Header;

class DevController extends Controller
{
    private function addUrlToSitemap($blog)
    {
        $sitemapPath = base_path('sitemap.xml');


        if (file_exists($sitemapPath)) {

            $sitemap = simplexml_load_file($sitemapPath);

        } else {
            $sitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

        }


        $blogUrl = url('blogs/' . $blog->slug);
        $urlExists = false;

        foreach ($sitemap->url as $urlElement) {

            if ((string) $urlElement->loc === $blogUrl) {
                $urlExists = true;
                break;
            }
        }


        if (!$urlExists) {
            $urlElement = $sitemap->addChild('url');
            $urlElement->addChild('loc', $blogUrl);
            $urlElement->addChild('lastmod', now()->toAtomString());
            $urlElement->addChild('priority', '0.64');
        }


        $sitemap->asXML($sitemapPath);
    }

    private function removeUrlFromSitemap($blog)
    {
        $sitemapPath = base_path('sitemap.xml');

        if (file_exists($sitemapPath)) {

            $sitemapContent = simplexml_load_file($sitemapPath);

            $urlToRemove = url('blogs/' . $blog->slug);

            $newSitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

            $urlFound = false;

            foreach ($sitemapContent->url as $urlElement) {
                if ((string) $urlElement->loc === $urlToRemove) {
                    $urlFound = true;
                    continue;
                }

                $newUrlElement = $newSitemap->addChild('url');
                $newUrlElement->addChild('loc', (string) $urlElement->loc);
                $newUrlElement->addChild('lastmod', (string) $urlElement->lastmod);
                if (isset($urlElement->priority)) {
                    $newUrlElement->addChild('priority', (string) $urlElement->priority);
                }
            }
            $newSitemap->asXML($sitemapPath);

            return $urlFound;
        }

        return false;
    }

    //dynamic header
    public function header_index()
    {
        $headers = Header::all();
        return view('admin.header.index', compact('headers'));
    }

    public function header_create()
    {
        $headers = Header::pluck('header')->unique()->values();
        return view('admin.header.create', compact('headers'));
    }

    public function header_store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:headers,slug',
            'title' => 'required',
            'type' => 'required',
            'header' => 'required|unique:headers,header',
        ]);

        $header = new Header;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_icon.' . $file->getClientOriginalExtension();

            $path = public_path('uploads/headers');
            $file->move($path, $filename);
            $header->icon = 'uploads/headers/' . $filename;
        }

        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $type = $request->type; //header or sub-header
        if ($type == "header") {
            $header->header = $request->header;
            $header->sub_header = "";
        } else {
            $header->header = $request->header_drop;
            $header->sub_header = $request->header;
        }

        $header->slug = $slug;
        $header->title = $request->title;
        $header->status = $request->status;
        $header->type = $request->type;
        $header->save();
        $this->addUrlToSitemap($header);
        return redirect()->route('header.index')->with('success', 'Header added successfully');
    }

    public function header_status_update($id){
        $header = Header::find($id);
        $status = $header->status;
        if($status == '1'){
            $header->status = '0';
            $header->save();
            return redirect()->back()->withSuccess(' Success');
        }else{
            $header->status = '1';
            $header->save();
            return redirect()->back()->withSuccess(' Success');
        }
    }

    public function header_delete($id)
    {
        $header = Header::find($id);

        if ($header->sub_header != '') {
            $header->delete();
            return redirect()->back()->withSuccess('Delete Success');
        } else { 
            //deleting parent header
            $parent_header  = $header->header;
            Header::where('header',$parent_header)->delete();
            return redirect()->back()->withSuccess('Delete Success');
        }
    }
    //dynamic pages
    public function dynamic_index()
    {
        $dynamics = DynamicPage::all();
        return view('admin.devPage.index', compact('dynamics'));
    }
    public function dynamic_create()
    {
        return view('admin.devPage.create');
    }

    public function dynamic_store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:dynamic_pages,slug',
            'banner_description' => 'required',
            'first_section_description' => 'required',
            'second_section_description' => 'required',
            'banner' => 'required',
            'first_section_image' => 'required',
        ]);

        $dynamic = new DynamicPage;

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();

            $path = public_path('uploads/dynamic_pages');
            $file->move($path, $filename);
            $dynamic->banner = 'uploads/dynamic_pages/' . $filename;
        }

        if ($request->hasFile('first_section_image')) {

            $file = $request->file('first_section_image');
            $filename = time() . '_first_section_image.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/dynamic_pages');
            $file->move($path, $filename);
            $dynamic->first_section_image = 'uploads/dynamic_pages/' . $filename;
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));

        $dynamic->slug = $slug;
        $dynamic->banner_description = $request->banner_description;
        $dynamic->first_section_description = $request->first_section_description;
        $dynamic->second_section_description = $request->second_section_description;
        $dynamic->save();
        $this->addUrlToSitemap($dynamic);
        return redirect()->route('dynamic.index')->with('success', 'Page created successfully');

    }

    public function dynamic_edit_post(Request $request, $id)
    {

        $dynamic = DynamicPage::find($id);

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();

            $path = public_path('uploads/dynamic_pages');
            $file->move($path, $filename);
            $dynamic->banner = 'uploads/dynamic_pages/' . $filename;
        }

        if ($request->hasFile('first_section_image')) {

            $file = $request->file('first_section_image');
            $filename = time() . '_first_section_image.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/dynamic_pages');
            $file->move($path, $filename);
            $dynamic->first_section_image = 'uploads/dynamic_pages/' . $filename;
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));

        $dynamic->slug = $slug;
        $dynamic->banner_description = $request->banner_description;
        $dynamic->first_section_description = $request->first_section_description;
        $dynamic->second_section_description = $request->second_section_description;
        $dynamic->status = $request->status;
        $dynamic->save();
        $this->addUrlToSitemap($dynamic);
        return redirect()->route('dynamic.index')->with('success', 'Page Updated successfully');

    }

    public function dynamic_edit($id)
    {
        $dynamic = DynamicPage::find($id);
        return view('admin.devPage.edit', compact('dynamic'));
    }

    public function dynamic_delete($id)
    {
        $dynamic = DynamicPage::find($id);
        $dynamic->delete();
        $this->removeUrlFromSitemap($dynamic);
        return redirect()->route('dynamic.index')->with('success', 'Page Deleted Sucessfully');
    }

}
