<?php
/**
 * Template File Doc Comment
 *
 * PHP version 7
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/license/MIT MIT License
 * @link     https://localhost/
 */
?>
<?php

if (isset($_POST['submit'])) {
    $pickup = isset($_POST['pickup'])?$_POST['pickup']:'';
    $drop = isset($_POST['drop'])?$_POST['drop']:'';
    $cab = isset($_POST['cab'])?$_POST['cab']:'';
    $weight = isset($_POST['weight'])?$_POST['weight']:''; 
    if ($pickup>$drop) {
        $distance = ($pickup - $drop);
    } else {
        $distance = ($drop-$pickup);
    }
    if ($pickup == $drop) {
        echo"<script>alert('Pick Up and destination can not be same')</script>";
    } else {
        echo"<script>alert('Total Distance to travel ' +'$distance' +' km')</script>";
    }
    $fare = 0;
    if ($cab==1) {
        if ($distance>0 && $distance <=10) {
            $fare =  50 + 13.50 * ($distance);
            echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
        } elseif ($distance>10 && $distance<=60) {
            $rem_dis = $distance - 10;
            $fare = 50 + (10*13.50) + 12*($rem_dis);
            echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
        } elseif ($distance>50 && $distance<=160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $fare = 50 + (10*13.50) + (50*12) + 10.20*($rem_dis2);
            echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
        } elseif ($distance>160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $rem_dis3 = $rem_dis2 - 100;
            $fare = 50 + (10*13.50) + (50*12)+(100*10.20) + 8.50*($rem_dis3);
            echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
        }
    } elseif ($cab==2) {
        if ($distance>0 && $distance <=10) {
            $fare =  150 + 14.50 * ($distance);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>10 && $distance<=60) {
            $rem_dis = $distance - 10;
            $fare = 150 + (10*14.50) + 13*($rem_dis);            
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>50 && $distance<=160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $fare = 150 + (10*14.50) + (50*13) + 11.20*($rem_dis2);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $rem_dis3 = $rem_dis2 - 100;
            $fare = 150 + (10*14.50) + (50*13)+(100*11.20) + 9.50*($rem_dis3);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        }
    } elseif ($cab==3) {
        if ($distance>0 && $distance <=10) {
            $fare =  200 + 15.50 * ($distance);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>10 && $distance<=60) {
            $rem_dis = $distance - 10;
            $fare = 200 + (10*15.50) + 14*($rem_dis);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>50 && $distance<=160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $fare = 200 + (10*15.50) + (50*14) + 12.20*($rem_dis2);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $rem_dis3 = $rem_dis2 - 100;
            $fare = 200 + (10*15.50) + (50*14)+(100*12.20) + 10.50*($rem_dis3);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = 50+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = 100+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = 200+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        }
    } elseif ($cab==4) {
        if ($distance>0 && $distance <=10) {
            $fare =  250 + 16.50 * ($distance);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = (2*50)+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = (2*100) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = (2*200) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>10 && $distance<=60) {
            $rem_dis = $distance - 10;
            $fare = 250 + (10*16.50) + 15*($rem_dis);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = (2*50)+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = (2*100) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = (2*200) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>50 && $distance<=160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $fare = 250 + (10*16.50) + (50*15) + 13.20*($rem_dis2);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = (2*50)+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = (2*100) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = (2*200) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        } elseif ($distance>160) {
            $rem_dis1 = $distance - 10;
            $rem_dis2 = $rem_dis1 - 50;
            $rem_dis3 = $rem_dis2 - 100;
            $fare = 250 + (10*16.50) + (50*15)+(100*13.20) + 11.50*($rem_dis3);
            if ($weight==0) {
                echo"<script>alert('Total fare ' +'$fare' +' rs')</script>";
            } elseif ($weight>0 && $weight<10) {
                $total_fare = (2*50)+ $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>10 && $weight<20) {
                $total_fare = (2*100) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            } elseif ($weight>20) {
                $total_fare = (2*200) + $fare;
                echo"<script>alert('Total fare ' +'$total_fare' +' rs')</script>";
            }
        }
    }
}
?>
<?php include 'header.php' ?>
<?php
    $location=array("Charbagh"=>"0",
                    "Indira Nagar"=>"10",
                    "BBD"=>"30",
                    "Barabanki"=>"60",
                    "Faizabad"=>"100",
                    "Basti"=>"150",
                    "Gorakhpur"=>"210");
?>
<section class="container-fluid text-white pl-5 pr-5 pb-3 pt-2 text-center mt-0" id="booking-details">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 justify-content-center text-center bg-form border border-warning">
            <form action="" method="POST">
                <div class="form-group col-sm-12">
                    <p class="rounded-pill text-dark text-center city-taxi-p bg-warning">
                        CED CAB
                    </p>
                    <h5 class="text-warning">
                        Your EveryDay Travel Partner
                    </h5>
                    <p class="text-warning">
                        Ac cabs for point to point travel
                    </p>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Pickup
                            </div>
                        </div>
                        <select name="pickup" class="form-control">
                            <?php
                            foreach ($location as $key=>$value) {
                                echo "<option value='". $value ."'>".$key."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Drop
                            </div>
                        </div>
                        <select name="drop" class="form-control">
                            <?php
                            foreach ($location as $key=>$value) {
                                echo "<option value='". $value ."'>".$key."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Cab Type
                            </div>
                        </div>
                        <select name="cab" id="cabtype" class="form-control">
                            <option  value="1">CedMicro</option>
                            <option selected value="2">CedMini</option>
                            <option value="3">CedRoyal</option>
                            <option value="4">CedSuv</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Luggage
                            </div>
                        </div>
                        <input type="text" class="form-control lug" id="luggage" name="weight" placeholder="Enter Luggage Here In Kg">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <input type="submit" class="btn text-dark bg-warning rounded-pill" Value="Calculate Fare" name="submit">
                </div>
            </form>
        </div>
        <div class="col-lg-8 pt-5 text-center">
            <h2 class=" h1-form pt-2">
                Book a City Taxi to your destination in town
            </h2>
            <p class="p-form">
                Choose from a range of categories and prices
            </p>
        </div>
    </div>
</section>
<?php include 'footer.php'?>