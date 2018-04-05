<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{

    public function getPost($url)
    {
        if (App::isLocale('cs')) {
            $post = DB::table('posts')->select(['id', 'url', 'title_cs as title', 'content_cs as content'])->where('url', $url)->first();
        }
        if (App::isLocale('sk')) {
            $post = DB::table('posts')->select(['id', 'url', 'title as title', 'content as content'])->where('url', $url)->first();
        }
        if (App::isLocale('en')) {
            $post = DB::table('posts')->select(['id', 'url', 'title_en as title', 'content_en as content'])->where('url', $url)->first();
        }

        return $post;
    }

    /**
     * Test controller
    */
    public function index()
    {
        
        if (App::isLocale('en')) {
            return redirect('/cs');
        }
        
        return view('layouts/default');
    }

    public function search()
    {
        $text = Input::get('searchText');

        $posts = DB::table('posts')->select(['id', 'url', 'title_en as title', 'content as content'])->where('content', 'like', '%' . $text . '%')->get();


        return view('search', ['posts' => $posts]);
    }

    /*Application*/
    public function getApplication()
    {
        $post = $this->getPost('application');
        return view('posts/application', ['post' => $post]);
    } 

    public function getApplicationAdvantages()
    {
        $post = $this->getPost('application/advantages');
        return view('posts/application', ['post' => $post]);
    }

    public function getApplicationFeatures()
    {
        $post = $this->getPost('application/unique-features');
        return view('posts/application', ['post' => $post]);
    }

    public function getApplicationAssets()
    {
        $post = $this->getPost('application/assets');
        return view('posts/application', ['post' => $post]);
    }

    public function getApplicationHowWorks()
    {
        $post = $this->getPost('application/how-works');
        return view('posts/application', ['post' => $post]);
    }

    public function getApplicationStory()
    {
        $post = $this->getPost('application/story');
        return view('posts/application', ['post' => $post]);
    }

    public function getApplicationSap()
    {
        $post = $this->getPost('application/sap-integration');
        return view('posts/application', ['post' => $post]);
    }

    /*Implementation*/
    public function getImplementation()
    {
        $post = $this->getPost('implementation');
        return view('posts/implementation', ['post' => $post]);
    }

    public function getTechnicalAspects()
    {
        $post = $this->getPost('technical-aspects');
        return view('posts/application', ['post' => $post]);
    }
    public function getProdSysIntegration()
    {
        $post = $this->getPost('prod-sys-integration');
        return view('posts/application', ['post' => $post]);
    }
    public function getVisualization()
    {
        $post = $this->getPost('visualization');
        return view('posts/application', ['post' => $post]);
    } 

    /*Functionality*/
    public function getFunctionality()
    {
        $post = $this->getPost('functionality');
        return view('posts/functionality', ['post' => $post]);
    }

    /*Referrals*/
    public function getReferrals()
    {
        $post = $this->getPost('referrals');
        return view('posts/referrals', ['post' => $post]);
    }

    public function getStory()
    {
        $post = $this->getPost('our-story');
        return view('posts/about', ['post' => $post]);
    } 
    public function getDifferent()
    {
        $post = $this->getPost('what-makes-us-different');
        return view('posts/about', ['post' => $post]);
    } 
    public function getTeam()
    {
        $post = $this->getPost('our-team');
        return view('posts/ourTeam', ['post' => $post]);
    } 
    public function getWhere()
    {
        $post = $this->getPost('where-we-are');
        return view('posts/about', ['post' => $post]);
    } 
    public function getContact()
    {
        $post = $this->getPost('contact');
        return view('posts/contact', ['post' => $post]);
    } 
    public function getNews()
    {
        $post = $this->getPost('news');
        return view('posts/about', ['post' => $post]);
    }
    
    public function getAbout()
    {
        $post = $this->getPost('about');
        return view('posts/about', ['post' => $post]);
    }

    public function getSupport()
    {
        $post = $this->getPost('support');
        return view('posts/support', ['post' => $post]);
    }

    public function getServicesOverview()
    {
        $post = $this->getPost('services-overview');
        return view('posts/servicesOverview', ['post' => $post]);
    }

    //Customer Details

    public function getSkoda()
    {
        $post = $this->getPost('skoda-auto');
        return view('posts/referralDetail', ['post' => $post]);
    }
    public function getTdk()
    {
        $post = $this->getPost('tdk');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getMagna()
    {
        $post = $this->getPost('magna');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getCarrier()
    {
        $post = $this->getPost('carrier');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getNkt()
    {
        $post = $this->getPost('nkt-cables');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getFatra()
    {
        $post = $this->getPost('fatra');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getMiele()
    {
        $post = $this->getPost('miele');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getMatador()
    {
        $post = $this->getPost('matador');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getEmbraco()
    {
        $post = $this->getPost('embraco');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getKyb()
    {
        $post = $this->getPost('kyb');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getHyundai()
    {
        $post = $this->getPost('hyundai-dymos');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getMecom()
    {
        $post = $this->getPost('mecom');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getAllianz()
    {
        $post = $this->getPost('allianz');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getStvs()
    {
        $post = $this->getPost('stvs');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getBaxter()
    {
        $post = $this->getPost('baxter');
        return view('posts/referralDetail', ['post' => $post]);
    }
    public function getOrange()
    {
        $post = $this->getPost('orange');
        return view('posts/referralDetail', ['post' => $post]);
    }  
    public function getHanwha()
    {
        $post = $this->getPost('hanwha');
        return view('posts/referralDetail', ['post' => $post]);
    }
    public function getLasselsberger()
    {
        $post = $this->getPost('lasselsberger');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getCoavis()
    {
        $post = $this->getPost('coavis');
        return view('posts/referralDetail', ['post' => $post]);
    } 
    public function getSaintgobain()
    {
        $post = $this->getPost('saint-gobain');
        return view('posts/referralDetail', ['post' => $post]);
    }      
                
}