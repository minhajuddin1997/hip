<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="dist/css/demo.css"> -->
    <link rel="stylesheet" href="dist/css/dropify.min.css">
    <title>HIP || Career</title>
  </head>
  <body>
    <section class="bg-1">
      <div class="container">
        <div class="row">
          <div class="col l5"></div>
          <div class="col l2 s12 center-align logo-img">
            <img src="assets/logo/logo.png">
          </div>
        </div>
        <div class="col l12 center-align heading">
            

          <h3>Become Part of the Fastest Growing <br> Freelancing Community </h3>
          <p>Streamline your business operations at your fingertips and find the top talent in Pakistan!</p>
        </div>
      </div>
    </section>
    <section>
      <div class="container form-bg">
        <div class="row">
          <div class="col l1"></div>
          <div class="col l11 left-align join-now-heading">
            <h2>Upload Your CV</h2>
            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </h6>
          </div>
        </div>
        <hr class="form-divider">
        <div class="row">
          <div class="col l1"></div>
          <div class="col l11">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h6>
          </div>
        </div>
        <div class="row">
          <div class="col l1"></div>
	      <form class="col l10 s12 join-now" enctype="multipart/form-data"  method="POST" action="https://hireinpakistan.com/career/signup">
		   <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row mb0">
              <div class="input-field col l6 s12 radius-50">
                <input required placeholder="First Name"  id="first_name" name="first_name" type="text" class="validate" autocomplete="off">
                <label for="first_name">First Name</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
              </div>
              <div class="input-field col l6 s12 radius-50">
                <input required placeholder="Last Name" id="last_name" name="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
              </div>
            </div>
            <div class="row mb0">
              <div class="input-field col l6 s12 radius-50">
                <input required placeholder="Email" id="email" name="email" type="email" class="validate" >
                <label for="email">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
              </div>
              <div class="input-field col l6 s12 radius-50">
                <select required name="gender">
                  <option value="" disabled selected>Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
                <label>Gender</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l6 s12 radius-50">
                <select required name="country">
                  <option value="" disabled selected>Country</option>
                    @foreach($locations as $l)
                  <option value="{{ $l->id }}"> {{ $l->title }}</option>
                    @endforeach
                </select>
                <label>Country</label>
              </div>
              <div class="input-field col l6 s12 radius-50">
                <input required placeholder="Lorem ipsum" name="address" id="address" type="text" class="validate">
                <label for="address">Address</label>
              </div>
            </div>
            <div class="row mb0">
              <div class="input-field col s12 radius-50 mb0">
                <textarea required name="description" placeholder="Describe Yourself" id="textarea2" class="materialize-textarea" data-length="200"></textarea>
                <label for="textarea2">About</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l5 s12 radius-50">
                <select  required name="skills" id="skills">
                  <option value="" disabled selected>Select Skills</option>
                    @foreach($skills as $skill)
                  <option value="{{ $skill->title }}"> {{ $skill->title }}</option>
                    @endforeach
                </select>
                <label>Skills</label>
              </div>
              <div class=" col l5 s12">
                  <input max="100" min="1"   style="margin-top:20px" name="skill_percent"  id="skill_percent"    type="number" placeholder="Rate Your Skill (0% to 100%)" id="selected_rating_value" class="form-control">    
              </div>
              
              <div class=" col l2 s12">
                <button style="margin-top: 34px;" type="button" class="btn btn-primary addSkill"> Add</button>  
              </div>
            </div>
            
            
            
            
            
            <div class="row">
              <div class="col s12 m10">
                    <table  class="table">
                            <thead>
                                <tr>
                                    <th>Skill</th>
                                    <th>Percentage(%)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="skillsTable">
                            </tbody>
                    </table>
              </div>
            </div>
            
            
                    
            
            <div class="row">
              <div class="col s12 l3 m4">
                <label for="input-file-now">
                  <h5>Profile Photo</h5>
                </label>
                <input required  type="file" name="profile_photo" id="input-file-now" class="dropify" />
              </div>
              <div class="col s12 l9 m8">
                <label for="input-file-now">
                  <h5>Banner Photo</h5>
                </label>
                <input required  type="file" name="banner_photo"  id="input-file-now" class="dropify" />
              </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
              <div class="col s12 m10">
                <label for="input-file-now">
                  <h5>Portfolio</h5>
                </label>
                <input required type="file" name="cv"  id="input-file-now" class="dropify" />
              </div>
            </div>
            <div class="col l3 s12 m3">
              <button type="submit" class="btn send z-depth-3"> SEND </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col m5 s12 footer-logo">
            <img src="assets/logo/logo.png">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <br> do eiusmod tempor incididunt ut labore et dolore magna
            </p>
            <ul class="wt-socialiconfooter">
              <li class="wt-facebook"><a href="#"><i class="fa fa fa-facebook-f"></i></a></li>
              <li class="wt-twitter"><a href="#"><i class="fa fab fa-twitter"></i></a></li>
              <li class="wt-youtube"><a href="#"><i class="fa fab fa-youtube"></i></a></li>
              <li class="wt-instagram"><a href="#"><i class="fa fab fa-instagram"></i></a></li>
              <li class="wt-googleplus"><a href="#"><i class="fa fab fa-google-plus-g"></i></a></li>
            </ul>
          </div>
          <div class="col m3 s12 menu">
            <h6>Company</h6>
            <ul>
              <li>
                <a href="">About Us</a>
              </li>
              <li>
                <a href="">Privacy Policy</a>
              </li>
              <li>
                <a href="">Post A Job</a>
              </li>
            </ul>
          </div>
          <div class="col m4 s12 footer-email">
            <h6>Sign Up For Newsletter</h6>
            <div class="input-field col l12 s12 radius-50">
              <input placeholder="Lorem ipsum" id="email" type="email" class="validate" >
              <label for="email">Email</label>
              <span class="helper-text" data-error="wrong" data-success="right"></span>
              <div class="col l5 s12">
                <button type="submit" class="btn send z-depth-3"> SEND </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script>
      $(document).ready(function(){
          $('select').formSelect();
          $('input#input_text, textarea#textarea2').characterCounter();
          M.updateTextFields();
        });
      $('.chips').chips();
      $('.chips-initial').chips({
        data: [{
          tag: 'Designing',
        }]
      });
    </script>
    <script src="dist/js/dropify.min.js"></script>
    <script>
      $(document).ready(function(){
          // Basic
          $('.dropify').dropify();
      
          // Translated
          $('.dropify-fr').dropify({
              messages: {
                  default: 'Glissez-déposez un fichier ici ou cliquez',
                  replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                  remove:  'Supprimer',
                  error:   'Désolé, le fichier trop volumineux'
              }
          });
      
          // Used events
          var drEvent = $('#input-file-events').dropify();
      
          drEvent.on('dropify.beforeClear', function(event, element){
              return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
          });
      
          drEvent.on('dropify.afterClear', function(event, element){
              alert('File deleted');
          });
      
          drEvent.on('dropify.errors', function(event, element){
              console.log('Has Errors');
          });
      
          var drDestroy = $('#input-file-to-destroy').dropify();
          drDestroy = drDestroy.data('dropify')
          $('#toggleDropify').on('click', function(e){
              e.preventDefault();
              if (drDestroy.isDropified()) {
                  drDestroy.destroy();
              } else {
                  drDestroy.init();
              }
          })
      });
      
      
      
      
      
      
      
      
      
      
      
      
      ///////////////
      
      
      
      
    var skillLength = 0;
    
    $(document).on('click','.addSkill',function(){
        var skill = $("[name='skills']").val();
        var percentage = $("[name='skill_percent']").val();
        
        $("#skills option[value='"+skill+"']").each(function() {
            $(this).remove();
        });
        
        
        $("#skills option[value='"+skill+"']").each(function() {
            $(this).remove();
        });
        
        
        


           if(skillLength < 15) { skillLength++;
            var html = '';
            html += '<tr>';
            html += '<td> <input type="text" name="skills[]"  value=" '+skill+' "></td>';
            html += '<td> <input name="skills_percentage[]"  type="text"  value=" '+percentage+' "></td>';      
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"> <span class="glyphicon glyphicon-minus"> - </span></button></td>';
            html += '</tr>';
            $('#skillsTable').append(html);
               }
            })    
            $(document).on('click','.remove',function(){
            $(this).closest('tr').remove();
            })
            
    </script>
  </body>
</html>