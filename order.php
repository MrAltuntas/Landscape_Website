<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl"  >
    <div class="modal-content"  style="background-color: #4d524b;">
        <div style="width: 100%; height: 100%; ">
            <section>
                
                <div class="slider slider_one_big_picture">
                    <div><img style="width: 100%; height: 100%;   " src="img/andac/andac1.jpg" alt=""></div>
                    <div><img style="width: 100%; height: 100%;   " src="img/andac/andac2.jpg" alt=""></div>
                    <div><img style="width: 100%; height: 100%;" src="img/andac/andac3.jpg" alt=""></div>
                    <div><img style="width: 100%; height: 100%;" src="img/andac/andac4.jpg" alt=""></div>
                    <div class="next_button"></div>
                    <div class="prev_button"></div>
                    <div class="nav_indicators"></div>
                </div>
            <script>
                $(document).ready(function () {
                    $('.slider_one_big_picture').EasySlides({
                        'vertical': true,
                        'autoplay': false,
                        'stepbystep': true,
                        'show': 5,
                        'loop': true
                    })
                });
            </script>
        </section>
        </div>
    </div>
  </div>
</div>