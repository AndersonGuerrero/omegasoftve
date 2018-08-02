@extends('layouts.web.base')
@section('title', 'Casos de Exíto')
@section('content')
    <!--Page Title-->
    <section class="page-title">
    	<div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/7.jpg);"></div>
        <div class="auto-container">
        	<h1>Financial Planning</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="index-2.html">Home</a></li>
                    <li class="active">Financial Planning</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Service Single-->
    <section class="service-single">
    	<div class="auto-container">
            <div class="row clearfix">
            	<!--Content Side-->
                <div class="content-side pull-right col-md-8 col-sm-12 col-xs-12">
                	<div class="inner">
                    	<div class="content-block">
                        	<h2>Financial Planning</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <p>Some estate planning needs are unique to many business owners, and an accounting firm helps identify these. By looking at the big picture of a business and its key owners, the accounting firm is able to help develop the right mix of business entity creation and family trust establishment. Firms will work with estate planning attorneys, financial planners and insurance agents to implement long-term strategies for business transfers and to mitigate estate taxes.</p>
                        </div>
                        <div class="content-block two-column">
                        	<div class="row clearfix">
                            	<div class="text-column col-md-8 col-sm-8 col-xs-12">
                                    <h2>Strategy and Operations</h2>
                                    <p>Many business owners are great at providing the product or service that is the backbone of the business. But business owners aren't always experts at the financial aspects of running a business. Accounting firms can assist with this. Copies of business bank accounts can be sent to accounting firms that work with bookkeepers to maintain accurate cash flow records. Accounting firms also create profit and loss statements that break down key areas of costs and revenue streams.</p>
                                </div>
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure class="image"><img src="{{ URL::to('/') }}/images/resource/image-23.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-block">
                        	<h2>Our Work Skill</h2>
                            <div class="skill-box">
                            	<div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="96">
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="96">0</span>%</div>
                                        </div></div></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-block recent-work">
                        	<h2>Recent Works On Financial Planning</h2>
                            <div class="images-outer clearfix">
                            	<div class="image-box"><figure class="image"><img src="{{ URL::to('/') }}/images/resource/image-24.jpg" alt=""></figure></div>
                                <div class="image-box"><figure class="image"><img src="{{ URL::to('/') }}/images/resource/image-25.jpg" alt=""></figure></div>
                                <div class="image-box"><figure class="image"><img src="{{ URL::to('/') }}/images/resource/image-26.jpg" alt=""></figure></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            	<!--Nav Side-->
                <div class="nav-side col-md-4 col-sm-12 col-xs-12">
                	<div class="inner">
                    	<ul class="links-box">
                        	<li class="current"><a href="financial-planning.html"><span class="icon flaticon-idea-1"></span> Financial Planning</a></li>
                            <li><a href="savings-investment.html"><span class="icon flaticon-piggy-bank"></span> Savings & Investments</a></li>
                            <li><a href="private-banking.html"><span class="icon flaticon-skyline"></span> Private Banking</a></li>
                            <li><a href="consumer-leasing.html"><span class="icon flaticon-visitor"></span> Consumer Leasing</a></li>
                            <li><a href="secured-transactions.html"><span class="icon flaticon-user-1"></span> Secured Transactions</a></li>
                            <li><a href="strategic-planning.html"><span class="icon flaticon-settings-1"></span> Strategic Planning</a></li>
                            <li><a href="service-single.html"><span class="icon flaticon-bar-chart-1"></span> Trade & Stock</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!--Call To Acion Two Section-->
    <section class="call-to-action-two">
    	<div class="auto-container">
        	<div class="outer-box clearfix">
            	<h2>Are you looking a professional advisor for your business?</h2>
                <div class="link-box"><a href="{{ URL::to('/') }}/contacto/" class="theme-btn btn-style-three">Get a quote</a></div>
            </div>
        </div>
    </section>
@endsection