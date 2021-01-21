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
    
                return View('career.index');
        
    }

}
