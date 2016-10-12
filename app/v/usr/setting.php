<?if(isset($_SESSION['user_id']))
    {
 ?>
<div id="main">
<input hidden class="hidden" id = "setting">
    <div class="header">
        <h1>Setting Yourself</h1>
    </div>

    <div class="content">
    	<form class="pure-form">
            <fieldset>
                <legend>Common</legend>
                    <label for="option-one" class="pure-checkbox">
				        <input id="option-one" type="checkbox" value="">
				        Here's option one.
				    </label>

				    <label for="option-two" class="pure-radio">
				        <input id="option-two" type="radio" name="optionsRadios" value="option1" checked>
				        Here's a radio button. You can choose this one..
				    </label>

				    <label for="option-three" class="pure-radio">
				        <input id="option-three" type="radio" name="optionsRadios" value="option2">
				        ..Or this one!
				    </label>

                <legend>Customizing</legend>
                	<div class="pure-g">
                		<p class="pure-u-1-8 pure-u-sm-1-12">头像:</p>
            			<div class="pure-u-7-8"><img src="img/11.png" class="pure-img-responsive yuan_img"></div>


                	</div>
                <legend>Special</legend>


            </fieldset>
        </form>
    </div>

</div>

<?
}
?>