<div class="collapsible-body">
                                 <ul class="collection">		                                 <ul class="collection">
+                                @ if (  Auth::check() )
                                     <li class="collection-item avatar">		                                     <li class="collection-item avatar">
-                                        <span>		+                                        <div class="row">
-                                            <img src="http://res.cloudinary.com/suyabay/image/facebook/serenawilliams.jpg" alt="" class="circle">		+                                            <div class="col s2">
-                                        </span>		+                                                <img src="https://goo.gl/IJSkVB" alt="" class="circle">
-                                        <span class="bubble-content" style="color:#999;margin-left:40px;">		+                                            </div>
-                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum tellus, hendrerit tristique ligula vitae, semper eleifend ipsum.		+                                            <div class="col s10">
-                                                <div class="point"></div>		+                                                <textarea class="textarea-wrapper" placeholder="">
-                                        </span>		+                                                    Join the conversation...
+                                                </textarea>
+                                            </div>
+                                        </div>
                                     </li>		                                     </li>
+                                @else
                                     <li class="collection-item avatar">		                                     <li class="collection-item avatar">
                                         <span>		                                         <span>
-                                            <img src="http://res.cloudinary.com/suyabay/image/facebook/billclinton.jpg" alt="" class="circle">		+                                        <i class="fa fa-user fa-2x circle"></i>
                                         </span>		                                         </span>
-                                        <span class="bubble-content" style="color:#999;margin-left:40px;">		+                                        <span style="color:#999;margin-left:40px;">
-                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum tellus, hendrerit tristique ligula vitae, semper eleifend ipsum.		+                                            Only logged in users can comment.
-                                                <div class="point"></div>		+                                            <div class="point"></div>
                                         </span>		                                         </span>
                                     </li>		                                     </li>
-                            </div>		+                                @ endif
-                        </li>		+                                    <li class="collection-item avatar">
-                    </ul>		+                                        <div class="row">
+                                            <div class="col s2">
+                                                <img src="https://goo.gl/lVRGjF" alt="" class="circle">
+                                            </div>
+                                            <div class="col s10">
+                                                <div class="textarea-wrapper" placeholder="">
+                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum tellus, hendrerit tristique ligula vitae.
+                                                </div>
+                                            </div>
+                                        </div>
+                                    </li>
+                                </div>
