$('.carousel').carousel({interval:3000})
$(document).ready(function(){$('#characterLeft').text('תווים שנותרו 240');$('#message').keydown(function(){var max=240;var len=$(this).val().length;if(len>=max){$('#characterLeft').text('הגעת לגבול');$('#characterLeft').addClass('red');$('#btnSubmit').addClass('disabled');}else{var ch=max-len;$('#characterLeft').text(ch+' תווים שנותרו');$('#btnSubmit').removeClass('disabled');$('#characterLeft').removeClass('red');}});});