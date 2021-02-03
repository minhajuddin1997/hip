<?php

/**
 * Class PublicController
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\User;
use App\Language;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMailable;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use DB;
use App\Helper;
use App\Profile;
use App\Category;
use App\Location;
use App\Skill;
use Session;
use Storage;
use App\Report;
use App\Job;
use App\Proposal;
use App\EmailTemplate;
use App\Mail\GeneralEmailMailable;
use App\Mail\AdminEmailMailable;
use App\SiteManagement;
use App\Review;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Payout;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\Debug\ExceptionHandler as SymfonyExceptionHandler;
use App\Service;
use App\DeliveryTime;
use App\ResponseTime;
use App\Article;

/**
 * Class PublicController
 *
 */
class CareerController extends Controller
{

    
    public function index()
    {
         $skills = DB::table('skills')->join('skills_category', 'skills.skill_category', '=', 'skills_category.id')->select('skills.*', 'skills_category.name AS category_name')->get();

        return View('career.index', compact('skills'));
    }
    
    
    
    public function signup(Request $request)
    {
        
        
        $date = date('m-d-Y H:i:s');
        $data_str = '1234567890abcefghijklmnopqrstuvwxyz';
        $autogenerated = substr(str_shuffle($data_str), 0, 7);
          
        // For User     
        
            $user = User::firstOrNew(array('email' => $request->input('email')));
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            if (!empty($request->input('email'))) {
                $user->email = filter_var($request->input('email'), FILTER_SANITIZE_STRING);
            }
            $user->slug = filter_var($request->input('first_name'), FILTER_SANITIZE_STRING) . '-' .
                filter_var($request->input('last_name'), FILTER_SANITIZE_STRING);
            $user->password = \Hash::make($autogenerated);
            $user->user_verified = 1;
            $user->verification_code = null;
            $user->assignRole(3);
            $user->badge_id = null;
            $user->expiry_date = null;
            $user->save();
            
            
        //For image    
        if (!empty($request->file('profile_photo'))) {
            $profile_picture = $request->file('profile_photo');
            $image = rand().'.'.$profile_picture->getClientOriginalExtension();
            $profile_picture->move(public_path('uploads/users/'.$user->id),$image);
            $profile_picture = $image;
            $request->request->add(['avater' => $profile_picture]);
        }

        if (!empty($request->file('portfolio'))) {
            $portfolio = $request->file('portfolio');
            $portf = rand().'.'.$portfolio->getClientOriginalExtension();
            $portfolio->move(public_path('uploads/career/'.$user->id),$portf);
            $portfolio = $portf;
            $request->request->add(['portfolio' => $portfolio]);
        }

/*        if (!empty($request->file('cv'))) {
            $resume = $request->file('cv');
            $file = rand().'.'.$resume->getClientOriginalExtension();
            $resume->move(public_path('uploads/users/'.$user->id),$file);
            $resume = $file;
            $request->request->add(['resume' => $resume]);
        }*/
            
            
            
        //For profile
        
        
            $profile = Profile::firstOrNew(array('user_id' => $user->id));
            
            
            $profile->user()->associate($user->id);
            if (!empty($request->input('employees'))) {
                $profile->no_of_employees = intval($request->input('employees'));
            }
            $profile->avater = $profile_picture;
            /*$profile->banner = $banner_photo;*/
            $profile->portfolio = $request->input('portfolio');
            $profile->address = $request->input('address');
            $profile->city = $request->input('city');
            $profile->gender = $request->input('gender');
            $profile->portfolio = $request->input('portfolio');
            $profile->description = $request->input('description');
            $profile->portfolio_link = $request->input('portfolio_link'); 
            $profile->tagline = $request->input('tagline');
            $profile->phone_number = $request->input('phone_number');
            $profile->hourly_rate = $request->input('hourly_rate');
            $profile->user_experience = $request->input('user_experience');
            
            
            $profile->save();
            
            
        //For Skills
        
        if (!empty($request->input('skill'))) {
            DB::delete('delete from skill_user where user_id = ?', [$user->id]);
            foreach($request->input('skill') as $skill ){
              DB::insert('insert into skill_user (skill_id, skill_rating, user_id) values (?, ?, ?)', [$skill[0], $request->input('rating')[$skill[0]][0],$user->id]);
            } 
        }

            
        //For Mail
            if ($profile->id) {
                if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                    $template = DB::table('email_types')->select('id')->where('email_type', 'new_user')->get()->first();
                    if (!empty($template->id)) {
                        $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                        $email_params['name'] = Helper::getUserName($user->id);
                        $email_params['email'] = $user->email;
                        $email_params['password'] = $autogenerated;
//                        $email_params['ip'] = $ip;
                        Mail::to($user->email)->send(new GeneralEmailMailable('new_user', $template_data, $email_params));
                    }
                }
                      return redirect('/');
            
            } else {
                      return redirect('/');
            
            }
        
        
    }




}
