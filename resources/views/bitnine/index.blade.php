@extends('bitnine.master')


@section('content')


<section class="w3l-homeblock2 nav3 mt-5" id="work">
    <div class="midd-w3 py-5 mt-8">
        <div class="container pb-lg-5 pb-md-3">
            <div class="row">
                <div class="header-section text-center mt-5 mx-auto">
                    <h1 class="title-big">AgensGraph</h1>

                    <p class="mt-3">AgensGraph is an enterprise graph database management system which stores and
                        manages various types of data including relational data in your legacy system.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-progressblock py-5" id="why">
    <div class="container containerd py-lg-5 py-md-3">
        <div class="row">
            <div class="header-section text-center mx-auto">

                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h1 style="font-size:40px;color:#3a3a3a;">W.H.Y.?</h1>
                            <h3 class="title-big text-center">AgensGraph</h3>
                        </div>
                        <div class="flip-box-back">
                            <h3 class="text-center">Because AgensGraph takes on schema-free structure,
                                it is convenient and efficient to modify and add new data on the existing database.
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 stats mt-lg-0 mt-4 pl-lg-5 align-self">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-products py-5" id="projects">
    <div class="container py-lg-3">
        <div class="header-section text-center mx-auto">
            <h3 class="title-big">SQL + Cypher </h3>
            <h5>: Hybrid Query Processing</h5>
            <p class="mt-3">Cypher is one of the most efficient graph query languages in the graph domain.
                AgensGraph supports both Cypher and SQL in its graph domain.
                Through hybrid query technology, bring out the best performance
                by creating, modifying, and querying graph data.</p>
        </div>
        <div class="containera col-lg-12">
           <div class="container col-lg-4 stats mt-lg-0 mt-4 pl-lg-5 align-self flex">
              <img width="350" height="600" src="https://bitnine.net/wp-content/uploads/2020/11/agens_graph2.png" class="attachment-full size-full" alt="agensgraph image" srcset="https://bitnine.net/wp-content/uploads/2020/11/agens_graph2.png 650w, https://bitnine.net/wp-content/uploads/2020/11/agens_graph2-193x300.png 193w, https://bitnine.net/wp-content/uploads/2020/11/agens_graph2-600x932.png 600w" sizes="(max-width: 650px) 100vw, 650px">
           </div>
           <div class="col-lg-8 wpb_wrapper text-align text-center mt-3 mx-auto">
                  <h2 style="font-size: 20px;color: #1e73be;line-height: 1.2;text-align: left" class="mb-2">
                      <strong>Cypher in SQL</strong>
                  </h2>
                    <div class="ult-content-box-container mb-5">
                        <div class="ult-content-box" style="background-color: rgb(45, 45, 45); padding: 20px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent; box-shadow: none;" data-hover_box_shadow="none" data-bg="#2d2d2d" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                <div class="wpb_wrapper">
                                    <div class="codeBox">
                                        <strong class="code-strong">SELECT</strong>
                                           <span class="code-purple">n</span>
                                           <span class="code-light">.</span>
                                           <span class="code-purple">name</span><br>
                                        <strong class="code-strong">FROM</strong>
                                           <span class="code-purple">history</span>
                                           <span class="code-light">, (<strong class="code-strong">MATCH</strong> (n:dev) <strong class="code-strong">RETURN</strong> n) <strong class="code-blue">AS</strong> dev <strong class="code-strong">WHERE</strong> <span class="code-purple">history</span><span class="code-light">.</span><span class="code-purple">year</span> &gt; n.year::int;</span><br>
                                        <span class="code-light">---------</span><br>
                                        <span class="code-purple">name</span><br>
                                        <span class="code-light">---------</span><br>
                                        <span class="code-purple">someone</span><br>
                                        <span class="code-light">(1 row)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="ult-spacer spacer-64de0809b107c" data-id="64de0809b107c" data-height="20" data-height-mobile="20" data-height-tab="20" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>--}}
                    <h2 style="font-size: 20px;color: #1e73be;line-height: 1.2;text-align: left" class="mt-5 mb-2 mr-4">
                        <strong>SQL in Cypher</strong>
                    </h2>
                    <div class="ult-content-box-container ">
                        <div class="ult-content-box" style="background-color: rgb(45, 45, 45); padding: 20px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent; box-shadow: none;" data-hover_box_shadow="none" data-bg="#2d2d2d" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                <div class="wpb_wrapper">
                                    <div class="codeBox">
                                        <strong class="code-strong">MATCH</strong> (n:dev) <strong class="code-strong">WHERE</strong> <span class="code-purple">n</span><span class="code-light">.</span><span class="code-purple">year</span>::int &lt; (<strong class="code-strong">SELECT</strong> <span class="code-purple">year</span> <strong class="code-strong">FROM</strong> <span class="code-purple">history</span> <strong class="code-strong">WHERE</strong> <span class="code-purple">event</span> = 'Agens Graph')<br>
                                        <strong class="code-strong">RETURN</strong> properties(n) A n;<br>
                                        <span class="code-light">----------------------------------</span><br>
                                        <span class="code-light">n</span><br>
                                        <span class="code-light">----------------------------------</span><br>
                                        {"<span class="code-purple">name</span>": "<span class="code-purple">someone</span>","<span class="code-purple">year</span>": 2015}<br>
                                        <span class="code-light">(1 row)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



           </div>
        <div class="text-center mx-auto mt-5">
            <p>More information about Cypher</p>
            <a href="services.html" class="btn btn-style btn-primary mt-4 align-center">Read More</a>
        </div>
        </div>

        <div class="mt-5">
            <div class="mx-auto">
                <!--Horizontal Tab-->
                <div id="parentHorizontalTab">
                    <div class="resp-tabs-container hor_1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-services-block-3 py-5" id="services">
    <div class="features-main py-lg-5 py-md-3">
        <div class="container">
            <div class="header-section text-center mx-auto">
                <p>Fast, Always-On, and Extensive</p>
                <h3 class="title-big">Enterprise Graph Database </h3>

            </div>
            <div class="row features mt-4">

                <div class="col-lg-4 col-md-6 feature-grid">
                    <a href="#url">
                        <div class="feature-body service1">
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel mb-2">Performance</h3>
                                <p class="feature-text">AgensGraph releases an unmatched performance on complex/iterative join operations to that of traditional relational databases.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 feature-grid">

                    <a href="#url">   <!-- style="background-image: url(https://bitnine.net/wp-content/uploads/2020/11/sub_01-1-350.png)" href= -->
                        <div class="feature-body service2">
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel mb-2">Reliability</h3>
                                <p class="feature-text">AgensGraph is ACID compliant and offers trigger-based logical replication
                                    with high availability tools (Stolen, repmgr) for your stability.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 feature-grid">
                    <a href="#url">
                        <div class="feature-body service3">
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel mb-2">Compatibility</h3>
                                <p class="feature-text">AgensGraph supports most PostgreSQL extensions including foreign data wrappers,
                                    text searching, security, and spatial modules for all-purpose availability.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="w3l-products py-5" id="projects">
    <div class="container py-lg-3">
        <div class="header-section text-center mx-auto">
            <h3 class="title-big"> <img src="https://bitnine01.cafe24.com/wp-content/uploads/2020/09/ag_logo.png" alt="" width="184" height="35">
            vs. NoSQL</h3>
            <p class="mt-3">AgensGraph is an enterprise graph database management system which stores and
                manages various types of data including relational data in your legacy system.</p>
        </div>
        <div class="containera mt-5">
            <div class="mx-auto">
                <!--Horizontal Tab-->
                <div id="parentHorizontalTab">
                    <div class="text-align text-center custom-code custom-content issue-table">
                        <div class="wpb_wrapper">
                            <table>
                                <thead>
                                <tr style="margin: 10px"><td>&nbsp;</td>
                                    <td>Graph Model</td>
                                    <td>Relational Model</td>
                                    <td>Document Model</td>
                                    <td>Key-value Store Model</td>
                                </tr></thead>
                                <tbody>
                                <tr bgcolor="fac433" style="box-sizing: border-box">
                                    <td><strong>AgensGraph</strong></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check_black.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check_black.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check_black.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check_black.png"></td>
                                </tr>
                                <tr>
                                    <td>ArangoDB</td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                </tr>
                                <tr>
                                    <td>Couchbase</td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                </tr>
                                <tr>
                                    <td>Neo4j</td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                </tr>
                                <tr>
                                    <td>OrientDB</td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                </tr>
                                <tr>
                                    <td>CosmosDB</td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                </tr>
                                <tr>
                                    <td>Neptune</td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/check.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                    <td><img src="https://bitnine.net/wp-content/uploads/2020/09/x.png"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mt-4">Get Started with <span>AgensGraph!</span></p>
                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#learn"> DOWNLOAD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="w3l-products py-5" id="projects">
    <div class="container py-lg-3">
        <div class="header-section text-center mx-auto">
            <p>Why should I use</p>
            <h3 class="title-big">Enterprise Edition?</h3>
            <p class="mt-3">AgensGraph Enterprise Edition comes along with all the great features of
                our AgensGraph Community Edition but provides even more core capabilities for enterprises
                to stay universally connected to stable and efficient data. This includes monitoring,
                memory optimization, high availability, enhanced user environments, in addition to providing on-going professional support.
            </p>
        </div>
        <hr>
        <div class="mt-5">
            <div class="containera col-lg-12">
                <!--Horizontal Tab-->
{{--                <div id="parentHorizontalTab ">--}}
{{--                    <ul class="resp-tabs-list hor_1 col-lg-12">--}}
{{--                        <li class="col-sm-6 card-container text-center mx-auto">--}}
                <div class="containerc">
                    <div class="containera mb-4 col-lg-12">
                        <div class="col-lg-6 card-container mr-4">
                            <h3 class="mb-2"><strong>Customer Support</strong></h3>
                                    <p>We provide support by Agens support portal, e-mail and on-site for our customers who purchased AgensGraph Enterprise Edition with our commercial license.
                                        There are several grades in terms of our license agreement, and the range and the level of services we provide to our customers are different upon the contract contents they have.
                                    </p>
                        </div>
                        <div class="col-lg-6 card-container ml-4">
                            <h3 class="mb-2"><strong>License Agreement</strong></h3>
                                <p>License terms for using our products are currently under two major license agreements — Apache 2.0 and our Commercial License.
                                    Our Commercial License consists of three different license terms and if you want more details about our license agreements, please contact us by e-mail or our website.
                                </p>
                        </div>
                    </div>
                        <div class="containera col-lg-12">
                            <div class="col-sm-6 mr-4" style="background-color: rgb(75, 77, 79); box-shadow: rgba(228, 228, 228, 0.98) 1.02846px 1.02846px 3px 2.02846px; margin: 0px; transition: all 700ms ease 0s; border-color: transparent;" data-hover_bg_color="#1f6eae" data-hover_box_shadow=" 2px 2px 3px 3px rgba(89,89,89,0.3) " data-responsive_margins="margin:0px;" data-normal_margins="margin:0px;" data-bg="#4c4c4c">
                                <h2 style="font-size: 30px;color: #ffffff;text-align: center" class="">Technical Support</h2>
                                <div class="wpb_text_column ">
                                    <div class="wpb_wrapper">
                                        <p style="font-size: 20px; text-align: center;">Community Edition<br>
                                            –</p>
                                        <hr style="border: double #d1d1d1; border-width: 3px 0 0 0; widh: 100%; padding-bottom: 20px;">
                                        <p style="font-size: 17px; text-align: center;">
                                            <strong>Enterprise Edition</strong></p>
                                        <p style="text-align: center;">24×7 or 8×5 Online Support (e-mail / Agens support portal)<br>
                                            Professional On-site Support(separately costs)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 ml-4" style="background-color: rgb(76, 76, 76); box-shadow: rgb(229, 229, 229) 1px 1px 3px 2px; transition: all 700ms ease 0s; margin: 0px; border-color: transparent;" data-hover_bg_color="#1f6eae" data-hover_box_shadow=" 2px 2px 3px 3px rgba(89,89,89,0.3) " data-bg="#4c4c4c" data-normal_margins="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;">
                                <h2 style="font-size: 30px;color: #ffffff;text-align: center" class="vc_custom_heading vc_custom_1601272736677">License</h2>
                                <div class="wpb_text_column  vc_custom_1606453267085">
                                    <div class="wpb_wrapper">
                                        <p style="font-size: 20px; text-align: center;">Community Edition<br>
                                            Apache 2.0</p>
                                        <hr style="border-top: double #d1d1d1; border-width: 3px 0 0 0; widh: 100%; padding-bottom: 20px;">
                                        <p style="font-size: 17px; text-align: center;">
                                            <strong>Enterprise Edition</strong>
                                        </p>
                                        <div style="width: 100%;">
                                            <table cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                <tr>
                                                    <td style="margin: 0px; padding: 0px 3px; text-align: center;" colspan="3">Commercial</td>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td style="width: 33%; margin: 0px; padding: 0px 3px;">Evaluation</td>
                                                    <td style="width: 33%; margin: 0px; padding: 0px 3px;">Development</td>
                                                    <td style="width: 33%; margin: 0px; padding: 0px 3px;">Production</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#learn"> CONTACT US</a>
                    </ul>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
