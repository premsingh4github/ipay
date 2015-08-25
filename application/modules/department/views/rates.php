<!-- it should be placed  inside  <div class="container"> ; -->
<div class="row">
            <div class="col-md-12">
                <h3>OUR RATES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate <br>
                    commodo lectus, ac blandit elit tincidunt id. </p>
                <script>
                    
                               $.ajax({
                                   url : 'http://rate-exchange.appspot.com/currency?from=NPR&to=EUR',
                                   type: "GET",
                                   dataType: "jsonp",
                                   async:false,
                                    success: function (msg) {
                                      //alert(msg.rate);
                                      document.getElementById('AUS_PHIL').innerHTML = msg.rate;
                                   },
                                   error: function () {
                                   }

                                });
                             
                    
                    function test(from ,to){                       
                        $.ajax({
                                   url : 'http://rate-exchange.appspot.com/currency?from=' + from + '&to=' + to ,
                                   type: "GET",
                                   dataType: "jsonp",
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
                            <tr onload="test();">
                                <td>Australia (EUR $)</td>
                                <td>Philippines (PHIL RS)</td>
                                <!--<td>3.09</td>-->
                                <td id="EUR_PHP"><script> test('EUR','PHP'); </script>
                                </td>
                            </tr >
                            <tr>
                                <td>Australia (AUS $)</td>
                                <td>Zimbabwe (ZIM RS)</td>
                                <td>0.67</td>
                            </tr>
                            <tr>
                                <td>documen</td>
                                <td>Zimbabwe (ZIM RS)</td>
                                <td>0.67</td>
                            </tr>
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