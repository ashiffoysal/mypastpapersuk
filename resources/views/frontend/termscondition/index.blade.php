@extends('layouts.frontend')
@section('title','Terms and Condition')
@section('content')
<div class="page-title-area bg-overlay" style="background-image: url('{{ asset('frontend') }}/assets/img/bg/3.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="breadcrumb-inner">
                  <h2 class="page-title">PastPaperUK: Your Pathway to Exam Excellence</h2>
                  <ul class="page-list">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>Terms and Conditions</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="about-area bg-gray pd-top-120 pd-bottom-90">
  <div class="container">
      <div class="row">
        <div class="col-md-12 ">
            <h3>Terms and Conditions</h3>
            <p>These terms and conditions outline the use of the PastPaper UK website . By accessing or using this Website, you agree to abide by these Terms. 
              If you do not agree with these Terms, please refrain from using the Website. <br><br>
              Acceptance of Terms: By using the Website, you acknowledge that you have read, understood, and accepted these Terms in their entirety. 
              Intellectual Property: All content on the Website, including but not limited to text, graphics, logos, and downloadable materials, is protected by intellectual property laws and is the property of PastPaper UK. Users may not reproduce, distribute, or modify any content without prior written consent. 
              User Conduct: Users agree to use the Website in a lawful and respectful manner, refraining from any activities that may harm the Website or its users. 
              Privacy: PastPaper UK respects your privacy. Our Privacy Policy explains how we collect, use, and protect your personal information. 
              Disclaimer: While PastPaper UK strives to provide accurate and up-to-date information, we make no warranties or guarantees regarding the accuracy, completeness, or suitability of the content on this Website.
               Users use the information at their own risk. Liability: PastPaper UK is not liable for any direct or indirect damages resulting from the use of the Website. 
               Users assume full responsibility for any actions taken based on the information provided on the Website. <br><br>
               Links to Third-Party Websites: The Website may contain links to third-party websites. 
               PastPaper UK is not responsible for the content or practices of these websites.
                Users access these links at their own discretion. <br><br>
                Modifications: PastPaper UK reserves the right to modify, suspend, or discontinue any part of the Website at any time without notice. 
                Termination: PastPaper UK reserves the right to terminate a user's access to the Website at its discretion, without notice. 
                Governing Law: These Terms are governed by and construed in accordance with the laws of. <br><br>
                Contact: For any questions or concerns regarding these Terms and Conditions, please contact us. 
                By using the PastPaper UK Website, you agree to comply with these Terms. Failure to adhere to these Terms may result in the suspension or termination of your access to the Website.</p>
            
            {{-- <a href="{{ url('/get-free-resources') }}" class="btn btn-warning">Get Free Resource</a> --}}
          </div>
        </div>
    </div>
  </div>
</div>

@endsection