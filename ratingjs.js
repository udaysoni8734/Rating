
  var id

  var xmlHttp
  
 
  xmlHttp=GetXmlHttpObject()
  if (xmlHttp==null)
   {
   alert ("Browser does not support HTTP Request")
   return
   }
  var url="ratingpage.php"
  
  url=url+"?mID="+id
  xmlHttp.onreadystatechange=stateChanged 
  
  xmlHttp.open("GET",url,true)
  
  xmlHttp.send(null)
  
  }
  
  function stateChanged() 
  { 
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   { 
      var result = xmlHttp.responseText
      var data = result.split('<table>')
      document.getElementById("detail").innerHTML= data[0]
      document.getElementById("review").innerHTML=data[1]
  
   } 
  }
  
  
  
  function GetXmlHttpObject()
  {
  var xmlHttp=null;
  try
   {
   xmlHttp=new XMLHttpRequest();
   }
  catch (e)
   {
   try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
   catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
   }
  return xmlHttp;
  }