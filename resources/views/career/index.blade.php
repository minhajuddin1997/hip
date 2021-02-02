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
      <link rel="stylesheet" type="text/css" href="assets/css/rating.css">
      <!-- <link rel="stylesheet" href="dist/css/demo.css"> -->
      <link rel="stylesheet" href="dist/css/dropify.min.css">
      <title>HIP || Career</title>
   </head>
   <body>
      <section class="bg-1 bg-tn">
         <div class="container">
            <div class="row">
               <div class="col l5"></div>
               <div class="col l12 s12 center-align logo-img">
                  <img src="assets/logo/logo.png">
               </div>
            </div>
            <div class="col l12 center-align heading">
               <h3>Become Part of the Fastest Growing Freelancing Community </h3>
               <p>Streamline your business operations at your fingertips and find the top talent in Pakistan! </p>
               <p class="go-down"><a href="#form-sec"><i class="fa fa-arrow-down"></i></a></p>
            </div>
         </div>
      </section>
      <section id="form-sec" class="form-tn">
         <div class="container form-bg">
            <div class="row">
               <div class="col l12 center-align">
                   <h3>Your Profile</h3>
                  <h6>Unlock Your Doors to Millions of Opportunities! Enter the Fastest-Growing Freelance Market and Hunt for the Desired Job!</h6>
               </div>
            </div>
            <div class="row" style="margin-bottom: 0px;">
               <form class="col l12 s12 join-now" enctype="multipart/form-data"  method="POST" action="https://hireinpakistan.com/career/signup">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row mb2">
                     <div class="input-field col l4 s12 radius-50">
                        <input required placeholder="First Name"  id="first_name" name="first_name" type="text" autocomplete="off">
                        <label for="first_name">First Name</label>
                     </div>
                     <div class="input-field col l4 s12 radius-50">
                        <input required placeholder="Last Name" id="last_name" name="last_name" type="text" autocomplete="off">
                        <label for="last_name">Last Name</label>
                     </div>
                     <div class="input-field col l4 s12 radius-50">
                        <select  name="gender">
                           <option value="" disabled selected>Gender</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                        <label class="active">Gender</label>
                     </div>
                  </div>
                  <div class="row mb2">
                     <div class="input-field col l4 s12 radius-50">
                        <input required placeholder="Email" id="email" name="email" type="email" class="validate" autocomplete="off">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                     </div>
                     <div class="input-field col l4 s12 radius-50">
                        <input placeholder="Phone Number" required id="phone_number" name="phone_number" type="number" autocomplete="off">
                        <label for="phone_number">Phone Number</label>
                     </div>
                     <div class="input-field col l4 s12 radius-50">
                        <select name="city" id="city" >
                           <option value="" disabled selected>Select The City</option>
                           <option value="Islamabad">Islamabad</option>
                           <option value="">Punjab Cities</option>
                           <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                           <option value="Ahmadpur East">Ahmadpur East</option>
                           <option value="Ali Khan Abad">Ali Khan Abad</option>
                           <option value="Alipur">Alipur</option>
                           <option value="Arifwala">Arifwala</option>
                           <option value="Attock">Attock</option>
                           <option value="Bhera">Bhera</option>
                           <option value="Bhalwal">Bhalwal</option>
                           <option value="Bahawalnagar">Bahawalnagar</option>
                           <option value="Bahawalpur">Bahawalpur</option>
                           <option value="Bhakkar">Bhakkar</option>
                           <option value="Burewala">Burewala</option>
                           <option value="Chillianwala">Chillianwala</option>
                           <option value="Chakwal">Chakwal</option>
                           <option value="Chichawatni">Chichawatni</option>
                           <option value="Chiniot">Chiniot</option>
                           <option value="Chishtian">Chishtian</option>
                           <option value="Daska">Daska</option>
                           <option value="Darya Khan">Darya Khan</option>
                           <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                           <option value="Dhaular">Dhaular</option>
                           <option value="Dina">Dina</option>
                           <option value="Dinga">Dinga</option>
                           <option value="Dipalpur">Dipalpur</option>
                           <option value="Faisalabad">Faisalabad</option>
                           <option value="Ferozewala">Ferozewala</option>
                           <option value="Fateh Jhang">Fateh Jang</option>
                           <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                           <option value="Gojra">Gojra</option>
                           <option value="Gujranwala">Gujranwala</option>
                           <option value="Gujrat">Gujrat</option>
                           <option value="Gujar Khan">Gujar Khan</option>
                           <option value="Hafizabad">Hafizabad</option>
                           <option value="Haroonabad">Haroonabad</option>
                           <option value="Hasilpur">Hasilpur</option>
                           <option value="Haveli Lakha">Haveli Lakha</option>
                           <option value="Jatoi">Jatoi</option>
                           <option value="Jalalpur">Jalalpur</option>
                           <option value="Jattan">Jattan</option>
                           <option value="Jampur">Jampur</option>
                           <option value="Jaranwala">Jaranwala</option>
                           <option value="Jhang">Jhang</option>
                           <option value="Jhelum">Jhelum</option>
                           <option value="Kalabagh">Kalabagh</option>
                           <option value="Karor Lal Esan">Karor Lal Esan</option>
                           <option value="Kasur">Kasur</option>
                           <option value="Kamalia">Kamalia</option>
                           <option value="Kamoke">Kamoke</option>
                           <option value="Khanewal">Khanewal</option>
                           <option value="Khanpur">Khanpur</option>
                           <option value="Kharian">Kharian</option>
                           <option value="Khushab">Khushab</option>
                           <option value="Kot Addu">Kot Addu</option>
                           <option value="Jauharabad">Jauharabad</option>
                           <option value="Lahore">Lahore</option>
                           <option value="Lalamusa">Lalamusa</option>
                           <option value="Layyah">Layyah</option>
                           <option value="Liaquat Pur">Liaquat Pur</option>
                           <option value="Lodhran">Lodhran</option>
                           <option value="Malakwal">Malakwal</option>
                           <option value="Mamoori">Mamoori</option>
                           <option value="Mailsi">Mailsi</option>
                           <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                           <option value="Mian Channu">Mian Channu</option>
                           <option value="Mianwali">Mianwali</option>
                           <option value="Multan">Multan</option>
                           <option value="Murree">Murree</option>
                           <option value="Muridke">Muridke</option>
                           <option value="Mianwali Bangla">Mianwali Bangla</option>
                           <option value="Muzaffargarh">Muzaffargarh</option>
                           <option value="Narowal">Narowal</option>
                           <option value="Nankana Sahib">Nankana Sahib</option>
                           <option value="Okara">Okara</option>
                           <option value="Renala Khurd">Renala Khurd</option>
                           <option value="Pakpattan">Pakpattan</option>
                           <option value="Pattoki">Pattoki</option>
                           <option value="Pir Mahal">Pir Mahal</option>
                           <option value="Qaimpur">Qaimpur</option>
                           <option value="Qila Didar Singh">Qila Didar Singh</option>
                           <option value="Rabwah">Rabwah</option>
                           <option value="Raiwind">Raiwind</option>
                           <option value="Rajanpur">Rajanpur</option>
                           <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                           <option value="Rawalpindi">Rawalpindi</option>
                           <option value="Sadiqabad">Sadiqabad</option>
                           <option value="Safdarabad">Safdarabad</option>
                           <option value="Sahiwal">Sahiwal</option>
                           <option value="Sangla Hill">Sangla Hill</option>
                           <option value="Sarai Alamgir">Sarai Alamgir</option>
                           <option value="Sargodha">Sargodha</option>
                           <option value="Shakargarh">Shakargarh</option>
                           <option value="Sheikhupura">Sheikhupura</option>
                           <option value="Sialkot">Sialkot</option>
                           <option value="Sohawa">Sohawa</option>
                           <option value="Soianwala">Soianwala</option>
                           <option value="Siranwali">Siranwali</option>
                           <option value="Talagang">Talagang</option>
                           <option value="Taxila">Taxila</option>
                           <option value="Toba Tek Singh">Toba Tek Singh</option>
                           <option value="Vehari">Vehari</option>
                           <option value="Wah Cantonment">Wah Cantonment</option>
                           <option value="Wazirabad">Wazirabad</option>
                           <option value="" disabled>Sindh Cities</option>
                           <option value="Badin">Badin</option>
                           <option value="Bhirkan">Bhirkan</option>
                           <option value="Rajo Khanani">Rajo Khanani</option>
                           <option value="Chak">Chak</option>
                           <option value="Dadu">Dadu</option>
                           <option value="Digri">Digri</option>
                           <option value="Diplo">Diplo</option>
                           <option value="Dokri">Dokri</option>
                           <option value="Ghotki">Ghotki</option>
                           <option value="Haala">Haala</option>
                           <option value="Hyderabad">Hyderabad</option>
                           <option value="Islamkot">Islamkot</option>
                           <option value="Jacobabad">Jacobabad</option>
                           <option value="Jamshoro">Jamshoro</option>
                           <option value="Jungshahi">Jungshahi</option>
                           <option value="Kandhkot">Kandhkot</option>
                           <option value="Kandiaro">Kandiaro</option>
                           <option value="Karachi">Karachi</option>
                           <option value="Kashmore">Kashmore</option>
                           <option value="Keti Bandar">Keti Bandar</option>
                           <option value="Khairpur">Khairpur</option>
                           <option value="Kotri">Kotri</option>
                           <option value="Larkana">Larkana</option>
                           <option value="Matiari">Matiari</option>
                           <option value="Mehar">Mehar</option>
                           <option value="Mirpur Khas">Mirpur Khas</option>
                           <option value="Mithani">Mithani</option>
                           <option value="Mithi">Mithi</option>
                           <option value="Mehrabpur">Mehrabpur</option>
                           <option value="Moro">Moro</option>
                           <option value="Nagarparkar">Nagarparkar</option>
                           <option value="Naudero">Naudero</option>
                           <option value="Naushahro Feroze">Naushahro Feroze</option>
                           <option value="Naushara">Naushara</option>
                           <option value="Nawabshah">Nawabshah</option>
                           <option value="Nazimabad">Nazimabad</option>
                           <option value="Qambar">Qambar</option>
                           <option value="Qasimabad">Qasimabad</option>
                           <option value="Ranipur">Ranipur</option>
                           <option value="Ratodero">Ratodero</option>
                           <option value="Rohri">Rohri</option>
                           <option value="Sakrand">Sakrand</option>
                           <option value="Sanghar">Sanghar</option>
                           <option value="Shahbandar">Shahbandar</option>
                           <option value="Shahdadkot">Shahdadkot</option>
                           <option value="Shahdadpur">Shahdadpur</option>
                           <option value="Shahpur Chakar">Shahpur Chakar</option>
                           <option value="Shikarpaur">Shikarpaur</option>
                           <option value="Sukkur">Sukkur</option>
                           <option value="Tangwani">Tangwani</option>
                           <option value="Tando Adam Khan">Tando Adam Khan</option>
                           <option value="Tando Allahyar">Tando Allahyar</option>
                           <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                           <option value="Thatta">Thatta</option>
                           <option value="Umerkot">Umerkot</option>
                           <option value="Warah">Warah</option>
                           <option value="" disabled>Khyber Cities</option>
                           <option value="Abbottabad">Abbottabad</option>
                           <option value="Adezai">Adezai</option>
                           <option value="Alpuri">Alpuri</option>
                           <option value="Akora Khattak">Akora Khattak</option>
                           <option value="Ayubia">Ayubia</option>
                           <option value="Banda Daud Shah">Banda Daud Shah</option>
                           <option value="Bannu">Bannu</option>
                           <option value="Batkhela">Batkhela</option>
                           <option value="Battagram">Battagram</option>
                           <option value="Birote">Birote</option>
                           <option value="Chakdara">Chakdara</option>
                           <option value="Charsadda">Charsadda</option>
                           <option value="Chitral">Chitral</option>
                           <option value="Daggar">Daggar</option>
                           <option value="Dargai">Dargai</option>
                           <option value="Darya Khan">Darya Khan</option>
                           <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                           <option value="Doaba">Doaba</option>
                           <option value="Dir">Dir</option>
                           <option value="Drosh">Drosh</option>
                           <option value="Hangu">Hangu</option>
                           <option value="Haripur">Haripur</option>
                           <option value="Karak">Karak</option>
                           <option value="Kohat">Kohat</option>
                           <option value="Kulachi">Kulachi</option>
                           <option value="Lakki Marwat">Lakki Marwat</option>
                           <option value="Latamber">Latamber</option>
                           <option value="Madyan">Madyan</option>
                           <option value="Mansehra">Mansehra</option>
                           <option value="Mardan">Mardan</option>
                           <option value="Mastuj">Mastuj</option>
                           <option value="Mingora">Mingora</option>
                           <option value="Nowshera">Nowshera</option>
                           <option value="Paharpur">Paharpur</option>
                           <option value="Pabbi">Pabbi</option>
                           <option value="Peshawar">Peshawar</option>
                           <option value="Saidu Sharif">Saidu Sharif</option>
                           <option value="Shorkot">Shorkot</option>
                           <option value="Shewa Adda">Shewa Adda</option>
                           <option value="Swabi">Swabi</option>
                           <option value="Swat">Swat</option>
                           <option value="Tangi">Tangi</option>
                           <option value="Tank">Tank</option>
                           <option value="Thall">Thall</option>
                           <option value="Timergara">Timergara</option>
                           <option value="Tordher">Tordher</option>
                           <option value="" disabled>Balochistan Cities</option>
                           <option value="Awaran">Awaran</option>
                           <option value="Barkhan">Barkhan</option>
                           <option value="Chagai">Chagai</option>
                           <option value="Dera Bugti">Dera Bugti</option>
                           <option value="Gwadar">Gwadar</option>
                           <option value="Harnai">Harnai</option>
                           <option value="Jafarabad">Jafarabad</option>
                           <option value="Jhal Magsi">Jhal Magsi</option>
                           <option value="Kacchi">Kacchi</option>
                           <option value="Kalat">Kalat</option>
                           <option value="Kech">Kech</option>
                           <option value="Kharan">Kharan</option>
                           <option value="Khuzdar">Khuzdar</option>
                           <option value="Killa Abdullah">Killa Abdullah</option>
                           <option value="Killa Saifullah">Killa Saifullah</option>
                           <option value="Kohlu">Kohlu</option>
                           <option value="Lasbela">Lasbela</option>
                           <option value="Lehri">Lehri</option>
                           <option value="Loralai">Loralai</option>
                           <option value="Mastung">Mastung</option>
                           <option value="Musakhel">Musakhel</option>
                           <option value="Nasirabad">Nasirabad</option>
                           <option value="Nushki">Nushki</option>
                           <option value="Panjgur">Panjgur</option>
                           <option value="Pishin Valley">Pishin Valley</option>
                           <option value="Quetta">Quetta</option>
                           <option value="Sherani">Sherani</option>
                           <option value="Sibi">Sibi</option>
                           <option value="Sohbatpur">Sohbatpur</option>
                           <option value="Washuk">Washuk</option>
                           <option value="Zhob">Zhob</option>
                           <option value="Ziarat">Ziarat</option>
                        </select>
                        <label class="active">City</label>
                     </div>
                  </div>
                  <div class="row mb2">
                     <div class="input-field col l4 s12 radius-50">
                        <label class="active" for="experience">Experience</label>
                        <select  name="user_experience" >
                           <option value="" disabled selected>Select Experience</option>
                           <option value="1">1 Year</option>
                           <option value="2">2 Years</option>
                           <option value="3">3 Years</option>
                           <option value="4">4 Years</option>
                           <option value="5">5 Years</option>
                           <option value="6">6 Years</option>
                           <option value="7">7 Years</option>
                           <option value="8">8 Years</option>
                           <option value="9">9 Years</option>
                           <option value="10">10 Years +</option>
                        </select>
                     </div>
                     <div class="input-field col l4 s12 radius-50">
                        <label class="active" for="hourly_rate">Hourly Rate</label>
                        <select  name="hourly_rate">
                           <option value="" disabled selected>Select Hourly Rate</option>
                           <option value="2">$2 USD</option>
                           <option value="3">$3 USD</option>
                           <option value="4">$4 USD</option>
                           <option value="5">$5 USD</option>
                           <option value="6">$6 USD</option>
                           <option value="7">$7 USD</option>
                           <option value="8">$8 USD</option>
                           <option value="9">$9 USD</option>
                           <option value="10">$10 USD</option>
                           <option value="11">$11 USD</option>
                           <option value="12">$12 USD</option>
                        </select>
                     </div>
                     <div class="input-field col l4 s12 radius-50">
                        <input placeholder="Tagline" name="tagline" id="tagline" required type="text" autocomplete="off">
                        <label for="hour">Tagline</label>
                     </div>
                  </div>
                  <div class="row mb2 before-skills">
                     <div class="input-field col s12 radius-50 mb0">
                        <textarea required name="description" placeholder="Describe Yourself" id="textarea2" class="materialize-textarea" data-length="200"></textarea>
                        <label for="textarea2">About</label>
                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                     </div>
                  </div>
                  <div class="text-center skills-cat-tn">
                     <h5>Skills <span><a class="tooltipped" data-position="right" data-tooltip="your text here">?</a></span></h5>
                     <? $skill_id  = 0; 
                        $one_time = 0;
                        ?>
                     @foreach($skills as $skill)    
                     <?php if( $skill_id !=  $skill->skill_category ){  if($one_time == 1) {     ?>
                  </div>
            </div>
            <?php } $one_time = 1; } ?>
            <?php if( $skill_id !=  $skill->skill_category ){ ?>
            <div id="skill-category-{{ $skill->skill_category }}" class="skill-category heading" class="col l6 m12 s12">
            <label>
            <input type="checkbox" class="skill_category_input" data-id="{{ $skill->skill_category }}" name="skill_category[]" value="{{ $skill->category_name }}" class="filled-in">
            <span><b>{{ $skill->category_name }}</b></span>
            </label>  
            <div class="hide-tn" id="skill-{{ $skill->skill_category }}" >
            <?php } ?>
            <div class="row">
            <div class="col l5 s6">
            <label>
            <input type="checkbox" name="skill[{{ $skill->id }}][]" value="{{ $skill->id }}"  class="filled-in">
            <span>{{ $skill->title }}</span>
            </label>
            </div>
            <div class="col">
            <fieldset class="rating">
            <input type="radio" id="star5-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="5"><label class="full" for="star5-{{ $skill->id }}" title="Awesome - 5 stars"></label>
            <input type="radio" id="star4half-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="4.5"><label class="half" for="star4half-{{ $skill->id }}" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star4-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="4"><label class="full" for="star4-{{ $skill->id }}" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star3half-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="3.5"><label class="half" for="star3half-{{ $skill->id }}" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star3-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="3"><label class="full" for="star3-{{ $skill->id }}" title="Meh - 3 stars"></label>
            <input type="radio" id="star2half-{{ $skill->id }}" name="rating[{{ $skill->id }}][]"  checked value="2.5"><label class="half" for="star2half-{{ $skill->id }}" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star2-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="2"><label class="full" for="star2-{{ $skill->id }}" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star1half-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="1.5"><label class="half" for="star1half-{{ $skill->id }}" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star1-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="1"><label class="full" for="star1-{{ $skill->id }}" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf-{{ $skill->id }}" name="rating[{{ $skill->id }}][]" value="0.5"><label class="half" for="starhalf-{{ $skill->id }}" title="Sucks big time - 0.5 stars"></label>
            </fieldset> 
            </div>
            </div>
            <?php $skill_id =  $skill->skill_category; ?>   
            @endforeach
            </div>
            </div>
         </div>
         <div class="row p-url-tn">
         <div class="col s12 m8">
         <label for="input-file-now">
         <h5>Profile Photo <span><a class="tooltipped" data-position="right" data-tooltip="your text here">?</a></span></h5>
         </label>
         <input required  type="file" name="profile_photo" id="input-file-now" class="dropify" />
         </div>
         </div>
         <div class="row p-url-tn">
         <div class="col s12 m8">
         <label for="input-file-now">
         <h5>Portfolio <span><a class="tooltipped" data-position="right" data-tooltip="your text here">?</a></span></h5>
         </label>
         <input required  type="file" name="portfolio" id="input-file" class="dropify" />
         </div>
         </div>
         <div class="row p-url-tn">
         <div class="col s12 m8">
         <label>
         <h5>Portfolio Url <span><a class="tooltipped" data-position="right" data-tooltip="your text here">?</a></span></h5>
         </label>
         <input required placeholder="Portfolio URL//" id="portfolio_link" name="portfolio_link" type="text" class="validate" >
         </div>
         </div>
         <div class="col l12 12 term-check-tn">
         <p>
         <label>
         <input id="indeterminate-checkbox" type="checkbox" checked="checked"/>
         <span>I agree to the HIP <a href="https://hireinpakistan.com/page/privacy-policy">Privacy Policy</a> and <a href="https://hireinpakistan.com/page/terms">Terms & Condition</a>.</span>
         </label>
         </p>
         </div>
         <div class="row">
         <div class="col l12 s12 m12 text-center submit-form-tn">
         <button type="submit" class="btn send z-depth-3">SUBMIT</button>
         </div>
         </div>
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
                     A popular freelancing platform, where experienced freelancers are on standby to get your work going.
                  </p>
                  <ul class="wt-socialiconfooter">
                     <li class="wt-facebook"><a href="#"><i class="fa fa fa-facebook-f"></i></a></li>
                     <li class="wt-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li class="wt-instagram"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li class="wt-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col m3 s12 menu">
                  <h6>Company</h6>
                  <ul>
                     <li>
                        <a href="https://hireinpakistan.com/public/page/about-us">About Us</a>
                     </li>
                     <li>
                        <a href="https://hireinpakistan.com/public/page/how-it-works">How It Works</a>
                     </li>
                     <li>
                        <a href="https://hireinpakistan.com/page/privacy-policy">Privacy Policy</a>
                     </li>
                     <li>
                        <a href="https://hireinpakistan.com/page/terms">Terms & Condition</a>
                     </li>
                  </ul>
               </div>
               <div class="col l4 m4 s12  footer-email">
                    <div class="footer-mail">
                        <h6>Sign Up for Newsletter</h6>
                            <form>
                                <input type="email" id="email" name="email" placeholder="Email" autocomplete="off">
                                <button type="submit" class="btn btn-sm btn-primary">Send</button>
                            </form>
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
         
         
         
             $('.skill_category_input').change(function() {
                
         
                if($(this).is(":checked")){
              //   $('#skill-'+$(this).attr("data-id")).removeClass('hide');
                 $('#skill-'+$(this).attr("data-id")).slideToggle();
                }else{
                  // $('#skill-'+$(this).attr("data-id")).addClass('hide');
                   $('#skill-'+$(this).attr("data-id")).slideToggle();
                }
                 
                 
             });
             
      </script>
      <script>
  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
</script>
   </body>
</html>