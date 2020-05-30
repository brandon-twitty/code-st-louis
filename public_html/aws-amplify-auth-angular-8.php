<?php
$Page='Angular 8 and Amplify UI with auth';
$Title='Code St Louis';
$metaDescription='A post that explains how to add authentication with Angular 8 and AWS Amplify since their tutorial doesnt work ';
$metaImage='/assets/images/meta-codestl-io.PNG';
$ogMetaDescription='A post that explains how to add authentication with Angular 8 and AWS Amplify since their tutorial doesnt work '
?>
<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head lang="en">
    <?php include_once ('assets/include/head.php'); ?>

</head>
<body class="header-dark navbar-transparent navbar-fixed with-topbar withAnimation">

<header class="hidden-xs">
    <?php include_once ('assets/include/header.php'); ?>
</header>

<div class="container"></div>



<div class="container"></div>
<div class="header-search" style="display:none;">
    <div class="display-table">
        <div class="table-cell">
            <form class="text-center" role="form">
                <fieldset>

                    <div class="form-group">
                        <button class="header-search-icon" type="submit"><i class="fa fa-fw fa-search"></i></button>
                        <label>Please type and press “enter”</label>
                        <input type="text" class="form-control" placeholder="Type to search...">
                    </div>

                </fieldset>
                <a href="#" class="showHeaderSearch headerSearchClose"><i class="fa fa-fw fa-times"></i></a>
            </form>
        </div>
    </div>
</div>
<div class="container"></div>

<div class="container"></div>
<div class="header-search" style="display:none;">
    <div class="display-table">
        <div class="table-cell">
            <form class="text-center" role="form">
                <fieldset>

                    <div class="form-group">
                        <button class="header-search-icon" type="submit"><i class="fa fa-fw fa-search"></i></button>
                        <label>Please type and press “enter”</label>
                        <input type="text" class="form-control" placeholder="Type to search...">
                    </div>

                </fieldset>
                <a href="#" class="showHeaderSearch headerSearchClose"><i class="fa fa-fw fa-times"></i></a>
            </form>
        </div>
    </div>
</div>
<div class="container"></div>

<div id="wrapper">

<!-- VISIBLE COPY OF THE HEADER ONLY IN MOBILE NEEDED FOR THE SIDE MENU EFFECT -->

<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header visible-xs">
        <a class="navbar-brand" href="index.php">Code St Louis</a>
        <button type="button" class="navbar-toggle" id="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="showHeaderSearch"><i class="fa fa-fw fa-search"></i></a>
    </div>
</div>

<!-- END -->

<section class="media-section darkbg" data-height="320" data-type="kenburns">
    <div class="media-section-image-container">
        <img src="assets/images/angular-amplify-960x504.png" alt="angular amplify image">
    </div>

    <div class="inner">
        <div class="text-center">
            <h2 style="color: black;" class="uppercase no-margin">Angular 8 + AWS Amplify Auth</h2>
        </div>
    </div>
</section>

<div class="container"></div>

<section class="container-fluid bg6 " style="padding-top: 30px;">
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="person-image text-center">
                <img src="assets/images/profile%20pic.jpg" alt="Brandon Twitty">
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="uppercase hr-left">Brandon Twitty</h2>
            <ul class="list-inline list-socials">
                <li><div class="text-wrapper"><a href="https://www.linkedin.com/in/twitty/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="LinkedIn"><i class="fa fa-linkedin fa-fw"></i></a></div></li>
            </ul>
            <h2 class="uppercase weight300">Founder | Solutions Architect</h2>
            <p>
                This is a start of blog series and tutorials creating a place for developers to come and the tutorials actually work. So many people are pushing out these "how to" tutorials and they are all over the place.
                A lot of times they are wrong, missing steps and even worse when the software company of the technology you are trying to use is wrong. As I get time, I will record the hard knock lessons learned from bad documentation or someone shitting together
                a blog post to get visitors. This post will discuss the 2 day struggle over something so dumb using Angular and Amplify. Send an email if something is incorrect or you found it helpfull OR you want me to buid you something!
            <div class="text-wrapper"><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:brandon.twitty@codestlouis.com">solutions@codestlouis.com</a></div>
            </p>
        </div>
    </div>
    </div>
</section>
<section class="container section">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="uppercase section-title hr-mid">The Struggle was real</h2>
        </div>
        <div class="col-md-12">

            <p>
                Developer's jobs have became easier in a sense with all these tech giants allowing us to use their infrastructure, tools and even coding languages. However, like all good things come with
                a price. I feel like every time I turn on my computer there is a new shiny language, framework, DevOps tool on and on... What makes this difficult for us programmers is all these systems obviously
                are on their own release trains and feel like they dont pay attention to the dependant frameworks or libraries. Then when something should be simple, it turns into an all day head ache, something that should have been very easy becomes extremely difficult and wastes, sometimes, the entire day. <span class="uppercase weight500">Us poor programmers...</span><br><br>

            Lets use a simple example like Angular 9. I had started a project last month, not too far in yet and said "eh maybe I should upgrade my CLI and stuff to Angular 9". No, it broke everything so had to revert back to 8. Entire day wasted trying to get Angular 9 to work then half a day reverting. Lets move past that.<br><br>
                So Ive been back to using Angular 8.1.x creating applications no problems (sort of). I then decided to start using <a href="https://docs.amplify.aws/start/q/integration/angular">AWS Amplify</a> to deploy the Front end and manage some back end resources.
            Initially had some issues getting it to deploy, but worked through them rather quickly and had a continuous deployment pipeline to AWS Amplify thinking "heck yea this stuff looks pretty cool". With a few key strokes and the amplify cli you can add Authentication, REST APIs, GrphQL APIs, all sorts of neat things, tutorials looked super easy!
            <br><br>
            NO! it was not easy, I followed the "Getting Started Tutorial" perfectly, Angular would not compile after running the amplify add auth command! Worked just fine before that and same thing happened last time on a much larger project in which I was trying to add this "simple auth library".
            I didnt have time to mess with it so just went back to Spring Security. I read every bug on Github's Amplify bug section, everyone had a million solutions, "work arounds" which none of them worked for me and plenty others saying "nope that didnt work", literally just hacking it.
            This tutorial I will show you how to ACTUALLY use Amplify AUTH, Angular 8 and deploy it because apparently they dont want their documentation to be correct. 100s of complaints on their Github you would think they would fix it
                <br><br>
            <h4>Step 1</h4>
            <br>
            <p>Just because, I'll start from installing the Amplify CLI</p>

            <pre>
               <code s>
    npm install -g @aws-amplify/cli
               </code>
        </pre>
           <p>
                This will install the CLI globally hence the -g <br><br>
               Next Configure Amplify
           </p>
            <pre >
               <code >
    amplify configure
               </code>
            </pre>
            <p>
               You will need to sign in to AWS and all that good Stuff, pick a region and if you dont have a user go a head and  create a user, I gave Admin Access.
            </p>
            <pre >
               <code >
    Specify the AWS Region
    ? region:  # Your preferred region
    Specify the username of the new IAM user:
    ? user name:  # User name for Amplify IAM user
    Complete the user creation using the AWS console
               </code>
            </pre>
            <p> One thing that wasn't clear is you only do this once. If you start another Amplify project this step does not have to be done unless you want to deploy it to a new region or something, Obviously there are some reasons you may
            want to create another Amplify user. In intellij the right hand bottom will show what User profile you are using. You will get a secret key with the user and you will need that to configure the rest so download it or copy and paste into the set up.</p>
            <h4>Step 2</h4>
            <p>
                Now you have the Amplify CLI set up Globally. Moving right along! nope this is where they leave out very important steps and there is just no way to really trouble shoot if this is wrong. So Amplify Auth does not work with Angular 9 at all,
                I saw someone said it does but about 100 that says it doesnt, Angular 9 uses IVY compiler and Amplify UI components which are used for AUTH do not. If you dont already install Angular CLI
            </p>
            <pre>
               <code>
    npm install -g @angular/cli
    ng new myAmplifyProject
    cd myAmplifyProject
               </code>
            </pre>
            <p>
                For Angular 6-8 you need to add this to your pollyfill.ts
            </p>
            <pre >
               <code >
    (window as any).global = window;
    (window as any).process = {
            env: { DEBUG: undefined },
                };
                               </code>
            </pre>
            <h4>Initialize Amplify </h4>
            <pre >
               <code >
    amplify init
               </code>
            </pre>
            <p>
                Then its going to take you trough a few various steps which I did not get fancy and just followed them
            </p>
            </pre>

            <pre>
               <code>
 Enter a name for the project (photo-share)

 # All AWS services you provision for your app are grouped into an "environment"
 # A common naming convention is dev, staging, and production
 Enter a name for the environment (dev)

 # Sometimes the CLI will prompt you to edit a file, it will use this editor to open those files.
 Choose your default editor

# Amplify supports JavaScript (Web & React Native), iOS, and Android apps
  Choose the type of app that you're building (javascript)

  what JavaScript framework are you using (angular)

  Source directory path (src)

  Distribution directory path (dist)

  Build command (npm run-script build)

  Start command (ng serve)

  # This is the profile you created with the `amplify configure` command in the introduction step.
  Do you want to use an AWS profile
                               </code>
            </pre>
            <p>After you are done initializing the project, it will create an aws-export.js which you may need to change it to a Typescript file like aws-expots.ts. That will be located in your src directory and
                holds the configurations for your AWS resources. This file is auto generated for you. Also, the init adds some stuff to your .gitignore </p>
            <h4>Next we are going to ruin the Angular build</h4>
            <p>
                Inside your project directory install the aws-amplify and amplify ui libraries
            </p>
            <pre >
               <code>
    npm install aws-amplify @aws-amplify/ui-angular
    ng serve
                               </code>
            </pre>
            <p>
                Sweet! navigate to Localhost:4200 and you should see the general Angular screen! Now we just need to add the AWS resource AUTH to be able to quickly add authentication to our app, custom signup forms all using their
                Incognito service. We are about to build a production ready app in a few key strokes. NO! i wish
            </p>
            <h4>Add Authorization</h4>
            <pre >
               <code>
    amplify add auth
                               </code>
            </pre>
            <p>
                Then deploy it to the cloud, they forget to tell you before you can deploy it you will need to run
            </p>
            <pre>
               <code>
    amplify add hosting
    amplify push
                               </code>
            </pre>
            <p>
                There are few more steps like adding the import module to you app.module.ts
            </p>
            <pre >
               <code >
    import { BrowserModule } from '@angular/platform-browser';
    import { NgModule } from '@angular/core';
    import { AppComponent } from './app.component';

    /* Add Amplify imports */
    import { AmplifyUIAngularModule } from '@aws-amplify/ui-angular';
    import Amplify from 'aws-amplify';
    import awsconfig from './aws-exports';

    /* Configure Amplify resources */
    Amplify.configure(awsconfig);

    @NgModule({
      declarations: [AppComponent],
      imports: [AmplifyUIAngularModule /* Add Amplify module */, BrowserModule],
      providers: [],
      bootstrap: [AppComponent],
    })
    export class AppModule {}
               </code>
            </pre>
            <p>Now open your app.component.html and add </p>
            <pre >
               <code>

      < amplify-authenticator >
        < div>
          My App
          < amplify-sign-out>< /amplify-sign-out>
        < /div>
      < /amplify-authenticator >
               </code>
            </pre>
            <p>
                Now press ng serve and watch the magic not happen. The build will not work and give random errors that do not make sense. On the Github comments they are saying add all these compiler options, switch to e2015 blah
                blah exhausting. My initial thought by the error probably needed to upgrade my Typescript because it was saying it cannot find Omit in a million places and I think Omit came with 3.5.x.
                Sweet just upgrade the Typescrypt we are good. NO. You do have to upgrade the Typescrpit to 3.5.3, maybe if you are already on 3.5.3 you will not have any problems. If you are on angular 9 I dont think any of this works which is when
                I originally upgraded Typescript but as mentioned had to revert because Angular 9 broke almost everything even the Smart tables. <br><br>

                After 2 days of messing with compilers, options, turning IVY on, off adding libraries people say fix this issue blah blah even starting over like maybe I missed something. So here is the secret sauce, to utilize Amplify Auth
                and UI you MUST install very specific Angular Libraries. When you ran npm install -g @angular/cli most likely it installed Angular 9 or if you had Angular already you may be on a different version so run ng --version.
                I had 8.0.x and Typescript 3.4.x. To finally fix this mess you must run this command
            </p>
            <pre >
               <code >

      ng update @angular/cli@8.3.17 @angular/core@8.2.13 @angular/compiler-cli@8.2.13
               </code>
            </pre>
            <p>
                I also installed this specific version of @angular-devkit/build-angular but not sure if that really fixed anything.
            </p>
            <pre >
               <code >

      npm install @angular-devkit/build-angular@0.803.25
               </code>
                 </pre>
            <p> Then uninstall typscript with</p>
            <pre>
               <code>
      npm uninstall typscript
      npm install typscript@3.5.3
               </code>
                 </pre>
            <h4> Conclusion</h4>
            <p>
                These new technologies coming out daily, seem very shiny and get me all the time. "Oh I want to use that looks awesome". It has cost me DAYSSSS of development getting stuck in these half baked technologies.
                Amazon Amplify has also a few other issues that Im not going to get into but all in all pretty cool service. Im going to make a repo for this code so no one else has to go through that pain.
                Also, in the future I will be creating same type of Tutorials that show the miss steps in the software providers own tutorials that were also very frustrating for technologies like <a href="https://www.serverless.com/">Serverless Framework</a>, Express
                apps deployed as Lambda Functions, <a href="https://ionicframework.com/">Ionic Framework</a> and some other really cool technologies. They are just struggling keeping the documentation and keeping up with dependency friends.
            </p>
        </div>

    </div>
</section>

<div class="container"></div>
    <div class="post-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Copyright 2020 © Code St Louis, All rights reserved
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline">

                        <?php include_once ('assets/include/socials.php'); ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- scripts bellow -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/corpress.min.js"></script>

<!-- IE -->
<script src="assets/js/modernizr.custom.js"></script>

<!-- Revolution Slider -->
<script src="assets/plugins/revslider/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/revslider/js/jquery.themepunch.plugins.min.js"></script>

<!-- Flexslider -->
<script src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>


<!-- magnific popup -->
<script src="assets/plugins/magnificpopup/jquery.magnific-popup.min.js"></script>





<!-- Twitter -->
<script src="assets/twitter/js/jquery.tweet.js"></script>

<!-- Contact form validation -->
<script src="assets/form/js/contact-form.js"></script>

<!-- our main JS file -->
<script src="assets/js/main.js"></script>
<!-- end scripts -->
</body>
</html>
