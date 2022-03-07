    <?php 
        session_start();
        $metatitle = 'Educational Material - The DIY Resource';
        $metadesc = 'Learn about the equipment used in our DIY projects.';
        include ('../include_markup/contentNav.php');
    ?>
    
    <main class="row mainContainer educationContainer">
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs educationcontentNavContainer" id="expandNavHorizontal">
            <header>
                <h1 class="educationcontentNavHeader">Materials</h1>
            </header>
            <ul class="educationcontentNav">
                <p>H</p>
                <li>Hot Glue</li>
                <p>P</p>
                <li>PVC</li>
                <li>Particle Board</li>
            </ul>
            <header>
                <h1 class="educationcontentNavHeader">Tools</h1>
            </header>
            <ul class="educationcontentNav">
                <p>C</p>
                <li>Coping Saw</li>
                <p>D</p>
                <li>Drill</li>
                <li>Dremel Tool</li>
            </ul>
            <header>
                <h1 class="educationcontentNavHeader">Skills</h1>
            </header>
            <ul class="educationcontentNav">
                <p>D</p>
                <li>Double Fisherman's Knot</li>
            </ul>
        </div>
        <div class="hidden-lg educationcontentNavArrow bootstrapPaddingDestroy" id="buttonContainer">
            <div>
                <button id="expandHorizontal" class="triangleRight"></button>
            </div>
        </div>
        <div class="col-lg-10 col-md-12 col-xs-12 educationcontentContainer bootstrapPaddingDestroy">
            <header>
                <h1 class="sectionHeaderBlack">PVC</h1>
            </header>
            <div class="educationcontentDetails">
                <button id="expandVertical"><div id="triangle" class="triangleRight"></div>Page Overview</button>
                <ul id="educationcontentDetailsList">
                    <p>In this guide, we answer common questions about PVC including:</p>
                    <li>What Sizes of PVC can I get?</li>
                    <li>PVC vs. CPVC?</li>
                    <li>Does PVC release toxic gas? Is PVC safe?</li>
                    <li>How strong is PVC?</li>
                    <li>How do you cut PVC?</li>
                    <li>Can you glue PVC?</li>
                    <li>What's is a "schedule" when you are talking about PVC?</li>
                    <li>How much does PVC cost?</li>
                </ul>
            </div>
            <div class="educationcontentVideo">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xbQ1vN1vNJQ" allowfullscreen></iframe>
                </div>
            </div>
            <section class="educationcontentSection">
                <header>
                    <h2>What is PVC?</h2>
                </header>
                <p>PVC, or polyvinyl chloride is a very common synthetic plastic polymer. PVC comes in a rigid form and in a flexible form, but this discussion is based on the rigid versions.</p>
                <div class="educationcontentImageL">
                    <img src="images/PVC.PNG" class="img-responsive">
                </div>
                <p>Main uses of rigid PVC include piping applications. It is used in our DIY projects because if its low cost and good material properties. Another type of PVC, CPVC, is produced which is specifically designed to handle higher temperatures.</p>
                <div class="educationcontentQA">
                    <article>
                        <div>
                            <h3>Q:</h3>
                            <p>What is the difference between PVC and CPVC?</p>
                        </div>
                        <div>
                            <h3>A:</h3>
                            <p>PVC, or polyvinyl chloride is altered chemically by adding more chlorine to create CPVC, or chlorinated polyvinyl chloride. This chemical alteration increases the melting point for use in high-temperature applications.</p>
                        </div>
                        <div class="educationcontentImageS">
                            <img src="images/PVC_MeltTemp.PNG" class="img-responsive">
                        </div>
                    </article>
                </div>
                <p>PVC comes in two different types of dimensioning standards called schedules. Schedule 40 PVC is a thinner wall thickness pipe, Schedule 80 is larger wall thickness. Schedule 40 is the most common type and is typically what you will find at the store. An important thing to remember about PVC is that it is speced by its inner diameter. The strict tolerances applied to the inner diameter are not applied to outer, therefore the outer diameter could be variable from piece to piece.</p>
                <div class="educationcontentImageL">
                    <img src="images/Schedule40PVC.PNG" class="img-responsive">
                </div>
            </section>
            <section class="educationcontentSection">
                <header>
                    <h2>PVC Properties</h2>
                </header>
                <p>PVC has excellent material properties which make it fantastic in construction. PVC is a hard and strong, chemically resistant material (it won't rot). It is stronger than most woods in a compression and bending scenarios.</p>
                <div class="educationcontentImageL">
                    <img src="images/PVC_MechPropertiesCompare.PNG" class="img-responsive">
                </div>
                <p>You can use the data in the table above to find out exactly how much weight your PVC will hold, but this requires working with engineering mechanics. You should use steel, or another metal if you are expecting it to take high loads (100 lbs+). Also note, because of the fact that you do not buy solid blocks of the PVC, you do not get the full benefit of the high strength. Pipe has lower strength than a solid cylinder made out of the same material with the same diameter.</p>
            </section>
            <section class="educationcontentSection">
                <header>
                    <h2>Working With PVC</h2>
                </header>
                <p>PVC is a very versatile and easy-to-work-with material. It's easy to cut, glue, paint and bend and you can use many different tools.</p>
                <p>When cutting PVC, you should be using a fine-toothed saw like a coping saw, or hack saw. High teeth-per-inch (tpi) blades cut more smoothly than low TPI blades, like the teeth you would see on a bow saw.</p>
                <p>PVC pipe can be cut in half length-wise by the use of a Dremel/Rotary tool. I demonstrate this technique in the PVC video on my YouTube channel and on the page above.</p>
                <p>PVC can also be bent. The technique which I would recommend is to use a heat gun. Apply even heat on the PVC and before it begins to melt (130 degrees Celcius) you can bend it, hold it steady and it will remain in the shape you desire.</p>
                <div class="educationcontentImageS">
                    <img src="images/PVC_HeatBend.jpg" class="img-responsive">
                </div>
                <p>A good bond when gluing PVC can be done with a variety of adhesives.</p>
                <div class="educationcontentQA">
                    <article>
                        <div>
                            <h3>Q:</h3>
                            <p>How do you glue PVC?</p>
                        </div>
                        <div>
                            <h3>A:</h3>
                            <p>The cheapest way to glue PVC is with hot glue. Be sure to prepare your surface by sanding it before applying the hot glue, as it is only a mechanical bond and needs something to hold onto. Super glue is likely the strongest adhesive that you can use for any bond that does not involve two pieces of PVC pipe being connected together by a fitting. In this scenario, the best adhesive is surely PVC cement. Gluing PVC to metal, an extra technique when using hot glue is to apply a piece of duct tape to the metal before gluing. The glue will bond better to the duct tape than it will to the metal, so let it take the stress.</p>
                        </div>
                    </article>
                </div>
            </section>
            <section class="educationcontentSection">
                <header>
                    <h2>PVC Safety</h2>
                </header>
                <p>PVC safety is all about keeping the PVC below its melting temperature and avoiding dust inhalation. A less common problem but a serious one is to avoid pressurizing PVC above its rating. Gas pressure failure of PVC send sharp shrapnel into the area and can cause injury.</p>
                <div class="educationcontentQA">
                    <article>
                        <div>
                            <h3>Q:</h3>
                            <p>Does PVC release toxic gas?</p>
                        </div>
                        <div>
                            <h3>A:</h3>
                            <p>PVC does release toxic gas upon melting. It releases Hydrogen Chloride, an irritating gas which can severly damage the respiratory system. Do not heat PVC above its melting temperature.</p>
                        </div>
                        <div class="educationcontentImageS">
                            <img src="images/PVC_HClGas.jpg" class="img-responsive">
                        </div>
                    </article>
                </div>
                <p>PVC also releases fine dust if it is sanded, or grinded. These particles are likely to be very small and can be considered respirable dust, which is the most dangerous category. Respirable dust settles deep into lung tissue. PVC dust is sharp and thus, this is a serious issue. Use a dust mask and safety glasses when working with PVC!</p>
                <div class="educationcontentImageS">
                    <img src="images/PVC_Dust.jpg" class="img-responsive">
                </div>
            </section>
            <div class="educationcontentEasylinks row">
                <a href="#topTarget" class="col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-2 col-lg-2 col-lg-offset-3 ">Back To Top</a>
                <a href="../educational.php" class="col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-2 col-lg-2 col-lg-offset-2">Selection</a>
            </div>
            <ol class="educationcontentReferences">
                <li><a href="http://www.jainamericas.com/PDF/PVCSheetWorkingTech.pdf">http://www.jainamericas.com/PDF/PVCSheetWorkingTech.pdf</a></li>
                <li><a href="http://www.instructables.com/id/Tips-on-Cutting-PVC-Pipe/step3/Metal-Cutoff-Blade/">http://www.instructables.com/id/Tips-on-Cutting-PVC-Pipe/step3/Metal-Cutoff-Blade/</a></li>
                <li><a href="https://www.osha.gov/dts/hib/hib_data/hib19880520.html">https://www.osha.gov/dts/hib/hib_data/hib19880520.html</a></li>
                <li><a href="http://www.pvcworkshop.com/cut&glue.htm">http://www.pvcworkshop.com/cut&glue.htm</a></li>
                <li><a href="https://plastics.ulprospector.com/generics/46/polyvinyl-chloride-pvc">https://plastics.ulprospector.com/generics/46/polyvinyl-chloride-pvc</a></li>
                <li><a href="http://www.pvc.org/en/p/what-is-pvc">http://www.pvc.org/en/p/what-is-pvc</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Polyvinyl_chloride">https://en.wikipedia.org/wiki/Polyvinyl_chloride</a></li>
                <li><a href="http://www.engineeringtoolbox.com/pvc-cpvc-pipes-dimensions-d_795.html">http://www.engineeringtoolbox.com/pvc-cpvc-pipes-dimensions-d_795.html</a></li>
                <li><a href="http://pvcinformation.org/links/index.php?catid=3">http://pvcinformation.org/links/index.php?catid=3</a></li>
                <li><a href="http://www.commercial-industrial-supply.com/resource-center/schedule-40-vs-schedule-80/">http://www.commercial-industrial-supply.com/resource-center/schedule-40-vs-schedule-80/</a></li>
            </ol>
        </div>
    </main>
    
    <?php 
        include ('../include_markup/footerLevel2.php');
    ?>
    <script src="../include_js/expandVertical.js"></script>
    <script src="../include_js/expandHorizontal.js"></script>
</body>
</html>