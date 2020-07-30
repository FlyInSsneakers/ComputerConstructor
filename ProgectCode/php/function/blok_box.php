<?php

function echo_button($current, $end){
	// echo '<form>
	// 			<div class="row">
	// 				<div class="col-lg-2  ml-auto mr-auto">';
	// $back = $current-1; 
	// if ($current > 1 )echo'<button name = "back" value="'.$back.'">"|=>"</button>';
	// echo 					'<button type="button" value = "'.$current.'>'.$current.'</button>';
	// $next = $current+1;					
	// if ($current != $end)echo' <input value="'.$next.' style = "display: none;"></input>
 //                        <button type="button" value ='.$next.'">"|=>"</button>';					
	// echo 			'</div>
	// 			</div>
	// 	</form>';

	return '<form>
	<div class="row">
	
	<input name = "current" reader value="'.$current.'" style="display: none;"></input>
	<input name = "end" reader value="'.$end.'" style="display: none;"></input>
	<div class = "col">
	<button class="paginate left"><i></i><i></i></button>
	</div>
	<div class = "col">
	<div class="counter"></div>
	</div>
	<div class = "col">
	<button class="paginate right"><i></i><i></i></button>
	</div>
	
	<script src="js/index.js"></script>
	</div>
	</form>';

}


function echo_block($name, $img, $cell, $id=null){


$one_img = explode(",", $img);

echo '<form> <div class="component_box">
			<div class="row" style="margin: 0px;">
				<div class="col-lg-3 not_padd">
					<div class="container_box">
						<div class="box">
							<img class="my_img" id = "next" src="'.$one_img[0].'" alt="">
						</div>
					</div>
				</div>
				<div  class="col-lg-5" style="padding-right: 0;">
					<div class="container_box">
						<div class="box">
							<div>
								<h5>'.$name.'</h5>
								<h5>'.$id.'</h5>
							</div>
						</div>
					</div>
				</div>
				<div  class="col-lg-2 not_padd">
					<div class="container_box">
						<div class="box">
							<div>
								<h5>Цена: <br>	</h5>
								<h5>'.$cell.'</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 not_padd">			
					<div class="container_box" style="border-right: none;">
						<div class="box">
						<input name = "but" reader value="'.$id.'" style="display: none;"></input>
							<button type="button" class="butt" name= "but" value = "'.$id.'">В избранное</button>
						</div>
					</div>
				</div>
			</div>							
		</div> </form>';




}

?>