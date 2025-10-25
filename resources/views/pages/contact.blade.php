@extends('layouts.app')

@section('title', 'VelvetWhisk - Contact Us')

@section('content')
<section class="py-5" id="contact" style="margin-top: 80px;">
     <div class="container">
           <div class="section-title">
                 <h2>Contact Us</h2>
           </div>
           <div class="row">
                 <div class="col-md-6">
                       <div class="contact-container">
                             <div class="contact-info">
                                   <div class="contact-item">
                                         <div class="contact-icon">
                                               <i class="fas fa-map-marker-alt"></i>
                                         </div>
                                         <div class="contact-text">
                                               <h5>Our Location</h5>
                                               <p>Szabist University, Near 2 Talwar</p>
                                         </div>
                                   </div>
                                   <div class="contact-item">
                                         <div class="contact-icon">
                                               <i class="fas fa-phone-alt"></i>
                                         </div>
                                         <div class="contact-text">
                                               <h5>Phone Number</h5>
                                               <p>+9 303 2680808</p>
                                         </div>
                                   </div>
                                   <div class="contact-item">
                                         <div class="contact-icon">
                                               <i class="fas fa-envelope"></i>
                                         </div>
                                         <div class="contact-text">
                                               <h5>Email Address</h5>
                                               <p>velvetWhisk@gmail.com</p>
                                         </div>
                                   </div>
                             </div>
                       </div>
                 </div>
                 <div class="col-md-6">
                       <div class="contact-container">
                             <form id="contactForm">
                                   <div class="row">
                                         <div class="col-md-6">
                                               <input type="text" class="form-control" placeholder="Your Name" required>
                                         </div>
                                         <div class="col-md-6">
                                               <input type="email" class="form-control" placeholder="Your Email" required>
                                         </div>
                                   </div>
                                   <input type="text" class="form-control" placeholder="Subject" required>
                                   <textarea class="form-control" placeholder="Your Message" required></textarea>
                                   <button type="submit" class="btn btn-primary w-100">Send Message</button>
                             </form>
                       </div>
                 </div>
           </div>
     </div>
</section>
@endsection