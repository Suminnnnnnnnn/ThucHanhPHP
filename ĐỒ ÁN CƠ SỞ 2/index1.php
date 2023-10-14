<?php
$con=mysqli_connect('localhost:3307','root','','giuaki');
$res=mysqli_query($con,"select * from city");
$arr=[];
while($row=mysqli_fetch_assoc($res)){
	$arr[$row['id']]['city']=$row['city'];
	$arr[$row['id']]['parent_id']=$row['parent_id'];
}
$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){
		if($parent==$data['parent_id']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul class="nav navbar-nav">';
				}else{
					$html.='<ul class="dropdown-menu">';
				}
				
			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$html.='<li><a href="#">'.$data['city'].'<span class="caret"></span></a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       /* Disable the transition effect */
section {
    transition: none;
}

button {
    transition: none;
}

/* Position the section and button elements relatively */
section {
    position: relative;
}

button {
    position: relative;
}

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="main/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="css1/bootstrap.css" rel="stylesheet">
      <link href="css1/jquery.smartmenus.bootstrap.css" rel="stylesheet">
      <link id="switcher" href="css1/theme-color/default-theme.css" rel="stylesheet">
      <link href="css1/style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
<section  id="menu" >
         <div class="container" style="transition: none; position: relative;">
            <div class="menu-area" style="transition: none; position: relative;">
               <!-- Navbar -->
               <div class="navbar navbar-default" role="navigation" style="transition: none; position: relative;">
                  <div class="navbar-header" style="transition: none; position: relative;">
                     <button style="transition: none; position: relative;" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span style="transition: none; position: relative;" class="sr-only">Toggle navigation</span>
                     <span style="transition: none; position: relative;" class="icon-bar"></span>
                     <span style="transition: none; position: relative;" class="icon-bar"></span>
                     <span style="transition: none; position: relative;" class="icon-bar"></span>
                     </button>          
                  </div>
                  <div class="navbar-collapse collapse" position: relative;>
                     <?php 
					 echo buildTreeView($arr,0);
					 ?>
                  </div>
                  <!--/.nav-collapse -->
               </div>
            </div>
         </div>
      </section>
    <div id="wrapper">
        

     
        
        
    
    </div>
        <!-- end header -->
        <div id="main-content">
            <div id="sidebarleft">
                <div class="btn-group btn-group-vertical" role="group" aria-label="Vertical Button Group">
                    <button data-href="index.html" type="button" class="btn btn-secondary" style="width: 224px ;padding:15px 0px 15px 0px;">
                       <i class="fa-solid fa-house-chimney fa-lg" style="color: black; position: relative;right: 20px; "> </i> 
                     <font style="color: black; font-size:larger;"> Trang chủ</font></a>         
                        </button>
                    <button data-href="html/musicchart.html" type="button" class="btn btn-secondary" style="width: 225px ;padding:15px 0px 15px 0px;">
                      <i class="fa-solid fa-chart-line fa-lg" style="color: black; position: relative;right: 15px;"> </i>  
                      <font style="color: black; font-size: larger;"> MusicChart</font>
                    </button>
                    <button data-href="html/radio.html" type="button" class="btn btn-secondary" style="width: 225px ;padding:15px 0px 15px 0px;">
                        <i class="fa-solid fa-radio fa-lg" style="color: black; position: relative;right: 38px;"></i>
                        <font style="color: black;font-size: larger;"> Radio</font>
                    </button>
                    <button data-href="html/thuvien.html" type="button" class="btn btn-secondary" style="width: 225px ;padding:15px 0px 15px 0px;">
                       <i class="fa-brands fa-napster fa-xl" style="color: black; position: relative;right: 26px;"></i> 
                       <font style="color: black;font-size: larger;"> Thư viện   </font>
                        </button>
                    <button data-href="html/nhacmoi.html" type="button" class="btn btn-secondary" style="width: 225px ;padding:15px 0px 15px 0px;">
                    <i class="fa-solid fa-music fa-lg" style="color: black; position: relative;right: 25px;"></i>
                       <font style="color: black; font-size: larger;">Nhạc mới</font>
                    </button>
                    <button data-href="html/theloai.html" type="button" class="btn btn-secondary" style="width: 225px ;padding:15px 0px 15px 0px;">
                        <i class="fa-solid fa-icons fa-lg" style="color: black; position: relative;right: 28px;"></i>
                        <font style="color: black; font-size: larger;"> Thể Loại</font>
                        </button>
                    <button data-href="html/top100.html" type="button" class="btn btn-secondary" style="width: 225px ;padding:15px 0px 15px 0px;">
                        <i class="fa-solid fa-star fa-lg" style="color: black; position: relative;right: 32px;;"></i>
                        <font style="font-size: larger; color: black;">Top 100</font>
                       </button>
                       <i class="fa-solid fa-guitar fa-bounce fa-5x" style="color: #9c9fa5;position: relative; left: 15px; top: 50px;"></i>
                       <i class="fa-solid fa-drum fa-shake fa-5x" style="color:#9c9fa5;position: relative; left: 120px; bottom: 25px;"></i>
                 </div>
            </div>
            <div id="content">
                <div class="slide" style="max-width :300px; margin-left: 17px; margin-top: 10px;">
                    <img class="mySlides" src="Picture/anh1.png" style="width:100%;height:170px; border: 1px;border-radius: 10px;">
                    <img class="mySlides" src="Picture/anh4.png" style="width:100%;height:170px ;border: 1px;border-radius: 10px;">
                    <img class="mySlides" src="Picture/anh3.png" style="width:100%; height:170px;border: 1px;border-radius: 10px;">
                  </div>
                  <div class="slide2" style="max-width:300px; margin-left: 25px; margin-top: 10px; ">
                    <img class="mySlides2" src="Picture/anh2.png" style="width:100%;height:170px; border: 1px;border-radius: 10px;">
                    <img class="mySlides2" src="Picture/anh5.png" style="width:100%;height:170px ;border: 1px;border-radius: 10px;">
                    <img class="mySlides2" src="Picture/anh6.png" style="width:100%;height:170px ;border: 1px;border-radius: 10px;">
                  </div>
                  <div class="slide3" style="max-width:300px; margin-left: 20px ;margin-top: 10px; ">
                    <img class="mySlides3" src="Picture/anh7.png" style="width:100%;height:170px;border: 1px;border-radius: 10px;">
                    <img class="mySlides3" src="Picture/anh8.png" style="width:100%;height:170px ; border: 1px;border-radius: 10px;">
                    <img class="mySlides3" src="Picture/anh9.png" style="width:100%;height:170px ;border: 1px;border-radius: 10px;">
                  </div>
                <h4><b style="color:aliceblue; position: relative;left: 15px;top: 10px;">Mới phát hành</b></h4>
                
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img  src="Picture/bai1.png" alt="">
                            <a href="html/karma.html"><i class="fa-solid fa-play fa-lg"></i></a></button>
                    
                    <figcaption>
                    Karma <br>
                  <p style="font-size: 13px;color:#ccc">Taylor Swift,Ice Spice</p>  
                    </figcaption>
                </figure>
                   </div>     
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai5.png" alt="">
                            <a href="html/duaconhu.html"><i class="fa-solid fa-play fa-lg"></i> </a>
                            </button>
                        <figcaption>
                            Đứa Con Hư <br>
                          <p style="font-size: 13px;color:#ccc">Sofia,Nguyễn Hồng Thuận</p>  
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai9.png" alt="">
                            <a href="html/khomodedong.html"><i class="fa-solid fa-play fa-lg"></i></a></button>
                        <figcaption>
                            Khó Mở Dễ Đóng <br>
                         <p style="font-size: 13px;color:#ccc">Liz Kim Cương</p>   
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai2.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            RUNAWAY  <br>
                         <p style="font-size: 13px;color:#ccc">OneRepublic</p>   
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai6.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            Nỗi Lòng <br>
                          <p style="font-size: 13px;color:#ccc">JUUN D</p>  
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai10.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            hoa trong lòng <br>
                          <p style="font-size: 13px;color:#ccc">Lê Thiện Hiếu</p>  
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai3.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            Việt Kiều <br>
                          <p style="font-size: 13px;color:#ccc">Wren Evans,Itsnk</p>  
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai7.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            Chúng Ta Cô Đơn Quá <br>
                         <p style="font-size: 13px;color:#ccc">Dương Edward</p>   
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai11.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            Ai Chung Tình Bằng Cô Đơn <br>
                         <p style="font-size: 13px;color:#ccc">Hồ Ngọc Hà,Noo Phước Thịnh</p>   
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai4.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            Kẻ Viết Ngôn Tình <br>
                         <p style="font-size: 13px;color:#ccc">Châu Khải Phong,ACV</p>   
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai8.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            Mưa Tháng Sáu <br>
                         <p style="font-size: 13px;color:#ccc">Văn Mai Hương,GREY D, Trung Quân</p>   
                        </figcaption>
                        
                    </figure>
                   </div>      
                   <div class="moiphathanh">
                    <figure class="newsong">
                        <button class="nut"><img src="Picture/bai12.png" alt="">
                            <a href="#"><i class="fa-solid fa-play fa-lg"></i></a>
                            </button>
                        <figcaption>
                            cô ấy của anh <br>
                       <p style="font-size: 13px;color:#ccc"> Bảo Anh</p>
                        </figcaption>
                        
                    </figure>
                   </div>          
                                
                            
                        
                            
                <h4><b style="color:aliceblue; position: relative;left: 15px;top: 10px;">Chill</b></h4> <br>
                
                            <div class="img-container" >
                                <button class="zoom">
                                    <img src="Picture/chill1.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                    
                                </button>
                                <div class="caption">Âm nhạc V-Pop nhẹ nhàng cùng bạn chào đón ngày hè</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img style="height: 148px;" src="Picture/chill2.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Indie Việt và những thanh âm lofi cực chill</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img style="height: 148px;" src="Picture/chill3.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Ở đây có những bản hit cực chill vừa nghe vừa feel</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img style="height: 148px;" src="Picture/chill4.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Nhạc việt "lâu phai" và gây nghiện hoài hoài</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img style="height: 148px;" src="Picture/chill5.png" alt="">
                                   
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Thả mình cùng những giai điệu V-Pop nhẹ nhàng</div>
                            </div>
                        

                <h4><b style="color:aliceblue; position: relative;left: 15px;top: 10px;">Happy Weekend</b></h4> <br>
                
                            <div class="img-container" >
                                <button class="zoom">
                                    <img src="Picture/happy1.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Âm nhạc năng lượng dành cho ngày cuối tuần</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/happy2.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">EDM giải nhiệt mùa hè xua tan cái nóng</div>
                            </div>
                       
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/happy3.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Đu đi đưa đi với những giai điệu V-Pop sôi động</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/happy4.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Giải tỏa tinh thần bằng những giai điệu V-Pop</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/happy5.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Tinh thần vui vẻ và năng lượng tích cực mỗi ngày</div>
                            </div>
                        
                 

                <h4><b style="color:aliceblue; position: relative;left: 15px;top: 10px;">Nghệ sĩ thịnh hành</b></h4> <br>
                
                            <div class="img-container" >
                                <button class="zoom">
                                    <img src="Picture/ns1.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">'Anh không quan trọng nữa' và những bản hit</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/ns2.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Noo Phước Thịnh và bộ sưu tập hit</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/ns3.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">'Không biết nên vui hay buồn' với âm nhạc của Bảo Anh</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/ns4.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">'Mưa tháng sáu' và những bản hit</div>
                            </div>
                        
                            <div class="img-container" >
                                <button class="zoom">
                                    <img  src="Picture/ns5.png" alt="">
                                    <a href="album.html"><i class="fa-regular fa-circle-play fa-2xl"></i></a>
                                </button>
                                <div class="caption">Hồ Ngọc Hà cùng 'Lời nói dối ngọc ngà'</div>
                            </div>
                        

                
            </div>
            <div id="sidebarright">
                <center><h3><b><font style="color: #9c9fa5;position: relative; top: 10px;">BXH BÀI HÁT</font></b></h3></center>
                <div class="btn-group" role="group" aria-label="Basic example" style="position: relative; top: 10px;">
                    <button data-href="index.html" type="button" class="btn btn-secondary" style="width: 60px;">Việt Nam</button>
                    <button data-href="html/aumy.html" type="button" class="btn btn-secondary" style="width: 90px;">Âu Mỹ</button>
                    <button data-href="html/hanquoc.html"  type="button" class="btn btn-secondary" style="width: 65px;">Hàn Quốc</button>
                    
                 </div>
                 <div style="display: inline-flex;">
                    <a href=""><img src="Picture/so1.png" alt="" style="width: 80px;height: 80px; position: relative; top: 20px; ">
                    </a> <a id="so1" href="" style="font-size: 15px; position: relative;top: 20px;left:5px; text-decoration: none;"> Không biết nên vui hay buồn</a>
                    
                 </div>
                 <p style="color:#9c9fa5;position: relative;left: 85px;bottom: 10px;">Bảo Anh, Táo</p>
                 <hr style="color:aliceblue;position: relative;bottom: 5px;">
                 <div>
                    <p style="color: green; position: relative;left: 7px;font-size: 20px;">2 </p>
                 <a id="so1" href="" style="position: relative; left: 30px;bottom: 60px; text-decoration:none; font-size: 15px ;">Cô ấy của anh ấy</a>
                 <p style="color:#9c9fa5;position: relative;left: 30px;bottom: 55px;font-size: 15px;">Bảo Anh</p>
                 <hr style="color:aliceblue;position: relative;bottom: 50px;">
                 </div>
                 <div>
                    <p style="color: green; position: relative;left: 7px;bottom:40px;font-size: 20px;">3 </p>
                    <a id="so1" href="" style="position: relative; left: 30px;bottom: 100px; text-decoration:none; font-size: 15px ;">Nấu ăn cho em</a>
                    <p style="color:#9c9fa5;position: relative;left: 30px;bottom: 95px;font-size: 15px;">Đen,PiaLinh</p>
                    <hr style="color:aliceblue;position: relative;bottom: 100px;">
   
                 </div>
                 <div style="position: relative;bottom: 50px;">
                    <p style="color: green; position: relative;left: 7px;bottom:40px;font-size: 20px;">4 </p>
                    <a id="so1" href="" style="position: relative; left: 30px;bottom: 100px; text-decoration:none; font-size: 15px ;">Đưa Em Về Nhàa</a>
                    <p style="color:#9c9fa5;position: relative;left: 30px;bottom: 95px;font-size: 15px;">GREY D,Chillies</p>
                    <hr style="color:aliceblue;position: relative;bottom: 100px;">
                 </div>
                 <div style="position: relative;bottom: 100px;">
                    <p style="color: green; position: relative;left: 7px;bottom:40px;font-size: 20px;">5 </p>
                    <a id="so1" href="" style="position: relative; left: 30px;bottom: 100px; text-decoration:none; font-size: 15px ;">Don't Côi</a>
                    <p style="color:#9c9fa5;position: relative;left: 30px;bottom: 95px;font-size: 15px;">RPT Orijinn,Ronboogz</p>
                    <hr style="color:aliceblue;position: relative;bottom: 100px;">
                 </div>
                 
                 
                 
                 
                 
            </div>
        </div> 
        <!-- end main-content -->
        <div id="footer">
         <div id="end1">
            <b style="padding-left: 20px;">HỖ TRỢ</b> <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Trợ giúp   <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Sơ đồ <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>NCCI
            
         </div>
         <div id="end1" >
            <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Liên hệ quảng cáo   <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Chính sách bảo mật <br>
            <i class="fa-solid fa-chevron-right fa-2xs"></i>Thỏa thuận sử dụng

         </div>
         <div id="end1" >
            <b style="padding-left: 20px;">SẢN PHẨM KHÁC</b> <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Mobile App   <br>
            <i class="fa-solid fa-chevron-right fa-2xs"></i>Smart TV <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Dektop
         </div>
         <div id="end1" >
            <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Dịch vụ 3G   <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>NCT Corp <br>
            <i class="fa-solid fa-chevron-right fa-2xs" ></i>Tuyển dụng
        </div>
        <div id="end1">
            <b style="padding-left: 20px;">LIÊN HỆ VỚI CHÚNG TÔI</b> <br>
           <i class="fa-brands fa-facebook fa-xl"></i>
           <i class="fa-brands fa-facebook-messenger fa-xl" ></i>
           <i class="fa-brands fa-square-instagram fa-xl" ></i>
           <i class="fa-brands fa-tiktok fa-xl " ></i>
           
           
        </div>
        <!-- end footer -->
    </div>
    </div>
</body>
<script>
    /* Thêm hoặc xóa class show ra khỏi phần tử */
    function myFunction(id) {
            document.getElementById(id).classList.toggle("show");
        }
        //lấy tất cả các button menu
        var buttons = document.getElementsByClassName('dropbtn');
        //lấy tất cả các thẻ chứa menu con
        var contents = document.getElementsByClassName('dropdown-content');
        //lặp qua tất cả các button menu và gán sự kiện
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener("click", function(){
                //lấy value của button
                var id = this.value;
                //ẩn tất cả các menu con đang được hiển thị
                for (var i = 0; i < contents.length; i++) {
                    contents[i].classList.remove("show");
                }
                //hiển thị menu vừa được click
                myFunction(id);
            });
        }
        //nếu click ra ngoài các button thì ẩn tất cả các menu con
        window.addEventListener("click", function(){
             if (!event.target.matches('.dropbtn')){
                for (var i = 0; i < contents.length; i++) {
                    contents[i].classList.remove("show");
                }
             }
        });
</script>

<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
    
    
    <!-- slideshow 2 -->
    <script>
        var myIndex2 = 0;
        carousel2();
        
        function carousel2() {
          var i;
          var y = document.getElementsByClassName("mySlides2");
          for (i = 0; i < y.length; i++) {
            y[i].style.display = "none";  
          }
          myIndex2++;
          if (myIndex2 > y.length) {myIndex2 = 1}    
          y[myIndex2-1].style.display = "block";  
          setTimeout(carousel2, 2000); // Change image every 2 seconds
        }
        </script>
        
        
        <!-- slideshow 3 -->
        <script>
            var myIndex3 = 0;
            carousel3();
            
            function carousel3() {
              var i;
              var z = document.getElementsByClassName("mySlides3");
              for (i = 0; i < z.length; i++) {
                z[i].style.display = "none";  
              }
              myIndex3++;
              if (myIndex3 > z.length) {myIndex3 = 1}    
              z[myIndex3-1].style.display = "block";  
              setTimeout(carousel3, 2000); // Change image every 2 seconds
            }
            </script>
      <script>
        const myButtons = document.querySelectorAll('.btn');
myButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    const href = this.getAttribute('data-href');
    window.location.href = href;
  });
});
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js1/bootstrap.js"></script>  
      <script type="text/javascript" src="js1/jquery.smartmenus.js"></script>
      <script type="text/javascript" src="js1/jquery.smartmenus.bootstrap.js"></script>  
        
        
</html>