@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-ch-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Management Team </span>
        </div>
    </div>
</section>

<section class="col-md-12 sp-aboutpg-section team-description">
    <div class="container-fluid">
        <div class="col-12 col-md-12 sp-aboutpg-whatweare">
            <h2>MARK JONES</h2>
            <h5>Founder and Chairman</h5>
        </div>

        <div class="col-12 col-md-12 ch-challenge-content team-description-content">
            <img src="{{ asset('frontend/images/mark.jpg') }}">
            <h4>Mark brings over 30 years of entrepreneurial experience in successfully launching and managing large and small companies, including Sprowtt, Sprowtt Services, and Sprowtt Technologies. Mark is an advisor to, and routinely lectures on capital formation in large entrepreneurial communities such as the NASA KSC Bootcamp for entrepreneurship and technology advancement. He also served as a judge for I-NASA technology challenge.  . He was a lecturer at George Washington College of Law on capital formation platforms to law students and SEC staff, and has also spoken on crowdfunding and related capital formation pathways such as Regulation A plus, and Regulation D 506c to the University of South Florida, and a growing number of other colleges and universities.</h4>

            <h4>Mark’s special expertise was one of the reasons he was accepted as an early participant in the crafting of the historically important JOBS Act (Jump Start Our Business Startups), enacted in 2015. He was actively involved with senior senators and congressmen, together with regulatory heads of the SEC and FINRA in the crafting of this legislation, which resulted in crowd funding & other regulations. This innovative legislation made it easier for millions of small businesses and early stage companies to raise venture growth capital. His public comments, referenced in several SEC small business symposiums on capital policy legislation, constitute all-important input for future legislation and clarification of regulatory guidance.</h4>
            
            <h4>He also has more than two decades experience in hardware and software development for very complex and financial-related transactions, as well development of automated software solutions for direct sales industries. He was the principal architect in the development of Sprowtt’s patent pending software for its crowdfunding, and Regulation A plus and Regulation D 506c financing platforms, and the formation of Sprowtt Technologies.. His financial platform automates the often onerous capital raising process and burdensome legal requirements, enabling young companies to cost effectively implement once expensive and challenging capital raising strategies.</h4>
           
            <h4>Mark’s unique blend of creativity, business and technical skills resulted in the development of an innovative new 3-D digital photo printing process. Currently the founder, chairman and CEO of Intelligent Ink, Inc., he holds several groundbreaking technology related patents and trademarks licensed to the company. His entrepreneurial skills have led him to establish numerous relationships with internationally recognized partners such as Kodak, Sony Corporation of America, General Electric, the Marriott Hotels, Disney World Resorts, Microsoft, Wilson Sporting Goods, the National Football League, Major League Baseball, the National Basketball Association and Brunswick Corp. </h4>
        </div>
    </div>
</section>


@endsection