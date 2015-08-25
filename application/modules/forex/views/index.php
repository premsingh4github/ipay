<!-- it should be placed  inside  <div class="container"> ; -->
<section class="eventform newsection">
    <div class="container">
        <div class="row">
                    <div class="col-md-12">
                        <h3>OUR RATES</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate <br>
                            commodo lectus, ac blandit elit tincidunt id. </p>
                        <script>

                              /*         $.ajax({
                                           url : 'http://rate-exchange.appspot.com/currency?from=NPR&to=EUR',
                                           type: "GET",
                                           dataType: "json",
                                           async:false,
                                            success: function (msg) {
                                              //alert(msg.rate);
                                              document.getElementById('AUS_PHIL').innerHTML = msg.rate;
                                           },
                                           error: function () {
                                              
                                           }

                                        }); */


                            function test(from ,to){ 
                              // alert(from);
                                $.ajax({
                                           url : 'http://rate-exchange.appspot.com/currency?from=' + from + '&to=' + to ,
                                           type: "GET",
                                           dataType: "json",
                                           async:false,
                                            success: function (msg) {  
                                                
                                              document.getElementById( from + '_' + to).innerHTML = msg.rate;
                                           },
                                           error: function () {
                                               
                                           }

                                        });
                            }                    
                        </script>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>From Country</th>
                                        <th>To Country</th>
                                        <th>Price Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $countries = $this->forex_model->find_all_by('status',1);
                                        if($countries != ''){ 
                                            foreach($countries as $country){
                                                ?>
                                    <tr>
                                        <td><?php echo $country->from_country.'( '.$country->from_currency.' )' ?></td>
                                        <td><?php echo $country->to_country.'( '.$country->to_currency.' )' ?></td>
                                        <td <?php echo 'id="'.$country->from_currency.'_'.$country->to_currency.'"' ; ?> ><?php echo "<script> test('".$country->from_currency."','".$country->to_currency."'); </script>" ?></td>
                                    </tr>
                                               <?php 
                                            }
                                        } 
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <button class="btn btn-calc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Click Here</button>
                                    </div>
                                    <div class="col-md-8"><div class="calc-quote">To calculate your rates with our calculator !!</div></div>
                                </div>
                            </div>
                            <div class="col-md-6">&nbsp;</div>
                        </div>
                    </div>
                </div>
    </div>
</section>