 <style>
 table{
	 text-align:left !important;
	 border:1px solid #999 !important;
	 }
 table td{
	 border:1px solid #999 !important;
	 padding-left:20px;
	 }
</style>
 <div id="Newshops">
  <div id="title-Newshops"><p>Chi tiết tin</p></div>
     <div class="list-Newshops">
    
        <?php
            echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));
        ?>
            <?php echo $form->create(null, array( 'url' => DOMAINAD.'newshops/add','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>     
            <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
              <tr>
                <td width="250">Tiêu đề</td>
                <td>                      
                     <?php echo $views['Newshop']['title']?>
                </td>
              </tr>
              
              
               <tr class="alternate-row">
                <td width="100">Nội dung tóm tắt</td>
                <td ><?php echo $views['Newshop']['introduction']; ?></td>
              </tr>
              <tr >
                <td>Nội dung </td>
                <td>                      
                    <?php echo $views['Newshop']['content']; ?>
                  
                    
                </td>
              </tr>
             
              <tr class="alternate-row">
                <td>Danh mục</td>
                <td>
               <?php $cat= $this->requestAction('newshops/get_name/'.$views['Newshop']['categorynewsshop_id']);
						foreach($cat as $cat){
						echo $cat['Categorynewsshop']['name'];
						}
						?>
                </td>
              </tr>
			  
			   
              <tr class="alternate-row">
                <td>Tên shop</td>
                <td>
              	<?php 
						
						$cat= $this->requestAction('newshops/get_shop/'.$views['Newshop']['user_id']);
					
						foreach($cat as $cat){
						echo $cat['Shop']['name'];
						}
						?>
						
                </td>
              </tr>
               <tr>
                <td>Ảnh đại diện</td>
                <td><img src="<?php echo DOMAINAD;?>/timthumb.php?src=<?php echo $views['Newshop']['images'];?>&amp;h=70&amp;w=100&amp;zc=1" alt="thumbnail" />
                </td>
              </tr>
               <tr  class="alternate-row">
                <td>Nguồn bài viết</td>
                <td>                      
                     <?php echo $views['Newshop']['source'];?>
                </td>
              </tr>
              
               <tr>
                <td>Trạng thái</td>
                <td>
                    <?php if($views['Newshop']['status']==1){
                            echo 'Đã active';
                        }else echo 'Chưa ative';?>
                </td>
              </tr>
             <tr>                 
                 <td colspan="2"><input class="submit" type="button" name = "" value="Quay lại" onclick ="javascript: window.history.go(-1);" /></td>
                
            </tr>
            </table>
            <!--  end product-table................................... -->
          <?php echo $form->end(); ?>
  </div>
</div>       