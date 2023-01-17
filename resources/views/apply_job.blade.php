@extends('layouts.app')

@section('content')
   
<!---About Us Banner Container-->
<section class="career_hero-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="secondary_career_slider">
               <div class="page-title">
                  <div class="container">
                     <h1>Career</h1>
                     <h6>Build your Career with US</h6>
                     <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!----Our Benefits- -->
<section class="our_benefits-container">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="secondary_heading">
               <span class="secondary_main-head">Our Benefits</span>
               <span class="secondary_sub-head">Since loving your job doesn’t pay your expenses, here are some amazing perks offered by Cognitive IT Solution</span>
            </div>
            <div class="process_flex-wrapper">
               <div class="p1-info-box info-box">
                  <div class="info_logo-box"><i class="fas fa-gift"></i></div>
                  <div class="p1-info-content">
                     <h3 class="tertiary-heading">Bonuses</h3>
                     <p>Pay rise, promotions, and top opportunities for professional development.</p>
                  </div>
               </div>
               <div class="p2-info-box info-box">
                  <div class="info_logo-box"><i class="fas fa-medkit"></i></div>
                  <div class="p1-info-content">
                     <h3 class="tertiary-heading">Health Issues</h3>
                     <p>We ensure all your healthcare needs, we believe in human right.</p>
                  </div>
               </div>
               <div class="p3-info-box info-box">
                  <div class="info_logo-box"><i class="fas fa-chalkboard-teacher"></i></div>
                  <div class="p1-info-content">
                     <h3 class="tertiary-heading">Training</h3>
                     <p>Mentors to guide and support you. Training programs to polish your skills.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-----What we see in candidates--->
<section class="what_we-see_container">
   <div class="container">
      <div class="row">
         .
         <div class="col-md-12">
            <div class="secondary_heading">
               <span class="secondary_main-head">What we see in Candidates?</span>
               <span class="secondary_sub-head">Candidate should have these core values</span>
            </div>
            <div class="cand_ability-wrapper">
               <div class="cand_ability-item">
                  <div class="svg_container">
                     <span><i class="fa fa-chevron-right"></i></span>
                  </div>
                  <div class="cand_ability-name">
                     Be Proactive
                  </div>
               </div>
               <div class="cand_ability-item">
                  <div class="svg_container">
                     <span><i class="fa fa-chevron-right"></i></span>
                  </div>
                  <div class="cand_ability-name">
                     Respect for All
                  </div>
               </div>
               <div class="cand_ability-item">
                  <div class="svg_container">
                     <span><i class="fa fa-chevron-right"></i></span>
                  </div>
                  <div class="cand_ability-name">
                     Openness
                  </div>
               </div>
               <div class="cand_ability-item">
                  <div class="svg_container">
                     <span><i class="fa fa-chevron-right"></i></span>
                  </div>
                  <div class="cand_ability-name">
                     Embrace Change
                  </div>
               </div>
               <div class="cand_ability-item">
                  <div class="svg_container">
                     <span><i class="fa fa-chevron-right"></i></span>
                  </div>
                  <div class="cand_ability-name">
                     Win as a team
                  </div>
               </div>
               <div class="cand_ability-item">
                  <div class="svg_container">
                     <span><i class="fa fa-chevron-right"></i></span>
                  </div>
                  <div class="cand_ability-name">
                     Creative Value
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-----Form for candidate who apply for a job-->
<section class="candidate_form-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="secondary_heading">
               <span class="secondary_main-head">Let's Connect</span>
               <span class="secondary_sub-head">Candidate should have these core values</span>
            </div>
            <div class="candidate_form">
               <h3 class="h3">Tell us about yourself.</h3>

               <form method="post" enctype="multipart/form-data" action="{{ url('success_apply_job')}}" class="form-controls">
                  @csrf
                  <div class="form-group candidate_form-group">
                     <input type="text" required="required" name="name" value="{{ old('name') }}" placeholder="Your Name" id="candidate_name" class="candidate_name">
                  </div>
                  @error('name')<div class="error" style="color: red;">{{ $message }}</div>@enderror

                  <div class="form-group candidate_form-group">
                     <input type="email" required="required" name="email" value="{{ old('email') }}" placeholder="Your Email" id="candidate_mail" class="candidate_mail">
                  </div>
                  @error('email')<div class="error" style="color: red;">{{ $message }}</div>@enderror

                  <div class="form-group candidate_form-group">
                     <input type="text" required="required" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" id="candidate_number" class="candidate_number">
                  </div>
                  @error('phone_number')<div class="error" style="color: red;">{{ $message }}</div>@enderror

                  @error('file')<div class="error" style="color: red;">{{ $message }}</div>@enderror

                  <div class="form-group candidate_form-group" style="margin-bottom: 0;">
                     <h5 class="label-heading">Upload Resume</h5>
                  </div>

                  <div class="form-group file-upload-wrap">
                     <div class="file-upload__label">     
                        <input class="custom-file-input" required="required" name="file" type="file">
                     </div>
                  </div>
                  <div class="form-group suitable-files">Suitable files are doc, docx &amp; pdf</div>
                  <!---Dropdown Selectors --->
                  <div class="db_wrapper">
                     <div class="form-group candidate_form-group">
                        <Label class="experience_label">Experience:</Label> &nbsp;
                        <select name="experience" id="exp">
                           @foreach ($experiences as $experience)
                              <option value="{{ $experience->id }}">{{ $experience->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group candidate_form-group">
                        <Label class="deg_label">Degree:</Label> &nbsp;
                        <select name="degree" id="deg">
                           @foreach ($degrees as $degree)
                              <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>

                  <div class="form-group candidate_form-group">
                     <input type="text" name="major_field" value="{{ old('major_field') }}" placeholder="Major Field" id="candidate_inst" class="candidate_inst">
                  </div>

                  <div class="form-group candidate_form-group">
                     <textarea name="details" id="cand_hooks" cols="30" rows="10" placeholder="Tell us why are you best for this position?">{{ old('details') }}</textarea>
                  </div>

                  <div class="candidate_form-group">
                     <input type="text" name="profile_link" value="{{ old('profile_link') }}" placeholder="Websites/Portfolio/LinkedIn" id="candidate_name" class="candidate_name">
                  </div>

                  <button class="candidate-app_btn">Submit Application</button>
               </form>

            </div>
         </div>
      </div>
   </div>
</section>


    
@endsection