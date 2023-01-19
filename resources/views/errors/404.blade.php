@extends('layouts.app')

@section('seo')
   <title>404 Page Not Found</title>
   <meta name="keywords" content="Cognitive IT Solution are create blogs for user information"/>
   <meta name="description" content="Cognitive IT Solution are create blogs for user information"/>
@endsection

<style>
   
.flex-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height:100vh;
  color: white;
  animation: colorSlide 15s cubic-bezier(0.075, 0.82, 0.165, 1) infinite;

  
}

.text-center {
    text-align: center;
    
    
  }

  .heading,h3 {
      margin: 10px;
      cursor: default;
      
      
    }
    .fade-in {
        animation: fadeIn 2s ease infinite;
      }
    .heading {
      font-size: 8em;
      transition: font-size 200ms ease-in-out;
      border-bottom: 1px dashed white;

      
    }
    
    span#digit1 { animation-delay: 200ms; }
    span#digit2 { animation-delay: 350ms; }
    span#digit3 { animation-delay: 500ms; }
    
    .btn-custom {
      border: 1px solid white;
      background: transparent;
      outline: none;
      padding: 10px 20px;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
      text-transform: uppercase;
      transition: background-color 200ms ease-in;
      margin: 20px 0;
      text-decoration:none ;
      
    }

    .btn-custom:hover {
        background-color: white;
        color: #555;
        cursor: pointer;
        text-decoration:none;
      }

@keyframes colorSlide {
  
  50% { background-color: #ff9753; }
  100% { background-color: #0c7ec2; }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  };
  100% {
    opacity: 1;
  }
}
</style>


@section('content')

<div class="d-flex align-items-center justify-content-center flex-container" style="height: 50vh;">
   <div class="text-center">
      <h1 class="heading">
        <span class="fade-in" id="digit1">4</span>
        <span class="fade-in" id="digit2">0</span>
        <span class="fade-in" id="digit3">4</span>
      </h1>
      <p class="fs-3"> Page not found.</p>
      <p class="lead">
        The page you’re looking for doesn’t exist.
      </p>
      <a href="{{ route('web.home') }}" class="btn-custom">Return To Home</a>
   </div>
</div>

    
@endsection