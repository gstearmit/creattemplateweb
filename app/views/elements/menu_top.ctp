 <div class="menu-top" style="background:#000000 url(<?php echo DOMAIN?>/images/bgmenu.png) no-repeat;">
	 	
 		<ul> <!-- fic cưng danh muc menu roi -->
	 		<li class="home"><a style="color:#30b44c;"href="<?php echo DOMAIN?>">HOME</a></li>
	 		<li class="li-menu" style="margin-left:80px;"><a href="<?php echo DOMAIN?>du-lich">DU LỊCH</a></li>
	 		<li class="li-menu" style="margin-left:62px;"><a href="<?php echo DOMAIN?>tieu-dung">TIÊU DÙNG</a></li>
	 		<li class="li-menu" style="margin-left:45px;"><a href="<?php echo DOMAIN?>gian-hang">GIAN HÀNG</a></li>
	 		<li class="li-menu" style="margin-left:60px;"><a href="<?php echo DOMAIN?>lien-he">LIÊN HỆ</a></li>
            
	 		<!-- hien thi cac thanh pho -->
             <li style="margin-left:50px; width:233px; overflow:hidden;">
	 			<ul class="ul-tp">
	 			<?php 
	 			$id=$this->Session->read('city');
	 		
	 			$row=$this->requestAction('comment/city/'.$id);  // trả vê đúng $id vùa nhập vào và gán cho Session là City
	 		
	 		
	 			 foreach ($row as $row)
				                      {
											?>
												<li class="chon" ><a href="<?php echo DOMAIN."home/".$row['City']['id']?>"><?php echo $row['City']['name'];?></a></li>
	 					
                         <?php         }   ?>
						 
						 
	 				<?php 
					
	 				$row=$this->requestAction('comment/city2/'.$id); // lấy giá trị khác id vùa nhập vào
	 				foreach ($row as $row)
					  {
	 				?>
	 				<li><a href="<?php echo DOMAIN."home/".$row['City']['id']?>"><?php echo $row['City']['name'];?></a></li>
	 				<?php }?>
	 				
	 			</ul>
	 		</li>
	 		
	</ul>
	 
	 
	 </div><!-- ENd menu-top -->