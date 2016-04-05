var im1= new Image()
im1.src="/images/arabi.png"
var im2= new Image()
im2.src="/images/child.png"
var im3= new Image()
im3.src="/images/man.png"
// 
// 
var step=1
function slideit(){
	document.images.slide.src=eval("im" +step+".src")
	if(step<3)
		step++
	else
		step=1
	setTimeout("slideit()",3000)
}
slideit()