$(".dugme").on("click", function(){
$(".klizac").toggleClass("aktivan")
if ($(".klizac").hasClass("aktivan"))
{
$("body").addClass("non-margin")
} else {
$("body").removeClass("non-margin")
}
})

$(".btn").on("click", function(){
$(".desno").toggleClass("aktivan")
if ($(".desno").hasClass("aktivan"))
{
$("body").addClass("non-margin1")
} else {
$("body").removeClass("non-margin1")
}
})

$(".toggle").on("click", function() {
$(".toggle").parent().toggleClass('active');
});
