class ImageManage {

    imageResize700x400(image)
    {
      //  console.log(image)

       var sp= image.split('/v')
       var newsp = sp[0]+'/c_thumb,h_600,w_700/v'+sp[1]
//console.log(newsp)
       return newsp
    }

    imageResize(image,x,y)
    {
      //  console.log(image)

       var sp= image.split('/v')
       var newsp = sp[0]+'/c_scale,h_'+y+',w_'+x+'/v'+sp[1]
//console.log(newsp)
       return newsp
    }



}

export default ImageManage = new ImageManage()
