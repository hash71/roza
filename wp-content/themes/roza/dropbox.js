/*jslint nomen:false, debug:true, evil:true, vars:false, browser:true, forin:true, undef:false, white:false */
/**
 * Includes a Form with javascript
 * @param {Object} formId
 * @param {Object} initialHeight
 * @param {Object} iframeCode
 */
function FrameBuilder (formId, appendTo, initialHeight, iframeCode){
    this.formId = formId;
    this.initialHeight = initialHeight;
    this.iframeCode = iframeCode;
    this.frame = null;
    this.timeInterval= 200;
    this.appendTo = appendTo || false;
    this.formSubmitted = 0;

    // initialize function for object
    this.init = function(){
        this.createFrame();
        this.addFrameContent(this.iframeCode);
    };
    
    // Create the frame
   // Create the frame
    this.createFrame = function(){
        var tmp_is_ie = !!window.ActiveXObject; //IE detection

        var htmlCode = "<"+"iframe onload=\"window.parent.scrollTo(0,0)\" src=\"\" allowtransparency=\"true\" frameborder=\"0\" name=\""+this.formId+"\" id=\""+this.formId+"\" style=\"width:100%; height:"+this.initialHeight+"px; border:none;\" scrolling=\"no\"></if"+"rame>";
         
        if(this.appendTo === false){
            document.write(htmlCode);
        }else{
            var tmp = document.createElement('div');
            tmp.innerHTML = htmlCode;
            var a = this.appendTo;
            document.getElementById(a).appendChild(tmp.firstChild);   
            //var form = document.getElementById()         
        }
        // also get the frame for future use.
        this.frame = document.getElementById(this.formId);

        //correct fix to IE security bugfix
        if(tmp_is_ie === true){
                try { //check for security bug ahead! If bug occurs then parent frame's document.domain was set, if it does not then do not apply fix!!!
                    var iframe = this.frame;
                    var doc = iframe.contentDocument ? iframe.contentDocument : (iframe.contentWindow.document || iframe.document);
                    doc.open();
                    doc.write("");
                }
                catch (err) {
                  this.frame.src= "javascript:void((function(){document.open();document.domain=\'"+ this.getBaseDomain()+"\';document.close();})())";
                }
        }
        // set the time on the on load event of the frame
        this.addEvent(this.frame, 'load', this.bindMethod(this.setTimer, this));

        var self = this;

        //on chrome to suppress unsafe attempt error this codes break setHeight-time interval loop
        if(window.chrome!==undefined){
            this.frame.onload = function(){
                try{
                    var doc = this.contentWindow.document;

                    var _jotform = this.contentWindow.JotForm;
                    if(doc!==undefined){
                        var form = doc.getElementById(""+self.formId);
                        self.addEvent(form, "submit", function(){
                            if(_jotform.validateAll()){
                                self.formSubmitted=1;
                            }
                        });
                    }
                } catch(e){

                }
            }
        }
    };
    
    // add event function for different browsers
    this.addEvent = function (obj, type, fn) {
        if (obj.attachEvent) {
            obj["e" + type + fn] = fn;
            obj[type + fn] = function () { obj["e" + type + fn](window.event); };
            obj.attachEvent("on" + type, obj[type + fn]);
        }
        else{
            obj.addEventListener(type, fn, false);
        }
    };

    this.addFrameContent = function (string){
        string = string.replace(new RegExp('src\\=\\"[^"]*captcha.php\"><\/scr'+'ipt>', 'gim'), 'src="http://api.recaptcha.net/js/recaptcha_ajax.js"></scr'+'ipt><'+'div id="recaptcha_div"><'+'/div>'+
                '<'+'style>#recaptcha_logo{ display:none;} #recaptcha_tagline{display:none;} #recaptcha_table{border:none !important;} .recaptchatable .recaptcha_image_cell, #recaptcha_table{ background-color:transparent !important; } <'+'/style>'+
                '<'+'script defer="defer"> window.onload = function(){ Recaptcha.create("6Ld9UAgAAAAAAMon8zjt30tEZiGQZ4IIuWXLt1ky", "recaptcha_div", {theme: "clean",tabindex: 0,callback: function (){'+
                'if (document.getElementById("uword")) { document.getElementById("uword").parentNode.removeChild(document.getElementById("uword")); } if (window["validate"] !== undefined) { if (document.getElementById("recaptcha_response_field")){ document.getElementById("recaptcha_response_field").onblur = function(){ validate(document.getElementById("recaptcha_response_field"), "Required"); } } } if (document.getElementById("recaptcha_response_field")){ document.getElementsByName("recaptcha_challenge_field")[0].setAttribute("name", "anum"); } if (document.getElementById("recaptcha_response_field")){ document.getElementsByName("recaptcha_response_field")[0].setAttribute("name", "qCap"); }}})'+
                ' }<'+'/script>');
        string = string.replace(/(type="text\/javascript">)\s+(validate\(\"[^"]*"\);)/, '$1 jTime = setInterval(function(){if("validate" in window){$2clearTimeout(jTime);}}, 1000);');
        var iframe = this.frame;
        var doc = iframe.contentDocument ? iframe.contentDocument : (iframe.contentWindow.document || iframe.document);
        doc.open();
        doc.write(string);
        
        setTimeout( function(){
            doc.close();
            try{
                if('JotFormFrameLoaded' in window){
                    JotFormFrameLoaded();
                }
            }catch(e){}
        },200);
    };
    
    this.setTimer = function(){
        var self = this;
        this.interval = setTimeout(function(){self.changeHeight();},this.timeInterval);
    };

    this.getBaseDomain = function(){
         var thn = window.location.hostname;
          var cc = 0;
          var buff = "";
          for(var i=0; i< thn.length;i++){
                var chr = thn.charAt(i);

                if(chr == "."){
                    cc++;
                }

                if(cc == 0){
                    buff+=chr;
                }
          }

          if(cc == 2){
            thn = thn.replace(buff+".","");
          }

          return thn;
    }
    
    this.changeHeight = function (){
        var actualHeight = this.getBodyHeight();
        var currentHeight = this.getViewPortHeight();
        if(actualHeight === undefined){
            this.frame.style.height = this.frameHeight;
            if(!this.frame.style.minHeight){
                this.frame.style.minHeight = "300px";
            }
        }else if  (Math.abs(actualHeight - currentHeight) > 18){
            this.frame.style.height = (actualHeight)+"px";
        }

        this.setTimer();
    };
    
    this.bindMethod = function(method, scope) {
        return function() {
            method.apply(scope,arguments);
        };
    };
    
    this.frameHeight = 0;
    this.getBodyHeight = function (){

        if(this.formSubmitted===1){
            return;
        }
        var height;
        var scrollHeight;
        var offsetHeight;

        try{  // Prevent IE from throw errors
            if (this.frame.contentWindow.document.height){
                
                height = this.frame.contentWindow.document.height;
                //Emre: to prevent "iframe height"  problem (61059)
                if (this.frame.contentWindow.document.body.scrollHeight){
                    height = scrollHeight = this.frame.contentWindow.document.body.scrollHeight;
                }
                
                if (this.frame.contentWindow.document.body.offsetHeight){
                    height = offsetHeight = this.frame.contentWindow.document.body.offsetHeight;
                }
                
            } else if (this.frame.contentWindow.document.body){
                
                if (this.frame.contentWindow.document.body.scrollHeight){
                    height = scrollHeight = this.frame.contentWindow.document.body.scrollHeight;
                }
                
                if (this.frame.contentWindow.document.body.offsetHeight){
                    height = offsetHeight = this.frame.contentWindow.document.body.offsetHeight;
                }
                
                if (scrollHeight && offsetHeight){
                    height = Math.max(scrollHeight, offsetHeight);
                }
            }            
        }catch(e){ }

        this.frameHeight = height;
        return height;
    };
    
    this.getViewPortHeight = function(){
        
        if(this.formSubmitted===1){
            return;
        }
        var height = 0;
        try{ // Prevent IE from throw errors
            if (this.frame.contentWindow.window.innerHeight)
            {
                height = this.frame.contentWindow.window.innerHeight - 18;
            }
            else if ((this.frame.contentWindow.document.documentElement) &&
                     (this.frame.contentWindow.document.documentElement.clientHeight))
            {
                height = this.frame.contentWindow.document.documentElement.clientHeight;
            }
            else if ((this.frame.contentWindow.document.body) &&
                     (this.frame.contentWindow.document.body.clientHeight))
            {
                height = this.frame.contentWindow.document.body.clientHeight;
            }            
        }catch(e){ }
        return height;
    };
    
    this.init();
}
FrameBuilder.get = [];
var i32294976549471 = new FrameBuilder("32294976549471", false, "", "<!DOCTYPE HTML PUBLIC \"-\/\/W3C\/\/DTD HTML 4.01\/\/EN\" \"http:\/\/www.w3.org\/TR\/html4\/strict.dtd\">\n<html><head>\n<meta http-equiv=\"Content-Type\" content=\"text\/html; charset=utf-8\" \/>\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" \/>\n<meta name=\"HandheldFriendly\" content=\"true\" \/>\n<title>Submit Your CV<\/title>\n<link href=\"http:\/\/cdn.jotfor.ms\/static\/formCss.css?3.1.1354\" rel=\"stylesheet\" type=\"text\/css\" \/>\n<link type=\"text\/css\" rel=\"stylesheet\" href=\"http:\/\/cdn.jotfor.ms\/css\/styles\/nova.css?3.1.1354\" \/>\n<link type=\"text\/css\" media=\"print\" rel=\"stylesheet\" href=\"http:\/\/cdn.jotfor.ms\/css\/printForm.css?3.1.1354\" \/>\n<style type=\"text\/css\">\n    .form-label{\n        width:150px !important;\n    }\n    .form-label-left{\n        width:150px !important;\n    }\n    .form-line{\n        padding-top:12px;\n        padding-bottom:12px;\n    }\n    .form-label-right{\n        width:150px !important;\n    }\n    body, html{\n        margin:0;\n        padding:0;\n        background:no-repeat;\n    }\n\n    .form-all{\n        margin:0px auto;\n        padding-top:20px;\n        width:650px;\n        background:no-repeat;\n        color:rgb(0, 0, 0) !important;\n        font-family:'Tahoma';\n        font-size:14px;\n    }\n    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{\n        color:rgb(0, 0, 0);\n    }\n\n<\/style>\n\n<link type=\"text\/css\" rel=\"stylesheet\" href=\"http:\/\/jotform.me\/css\/styles\/buttons\/form-submit-button-steel.css?3.1.1354\"\/>\n<script src=\"http:\/\/cdn.jotfor.ms\/static\/jotform.js?3.1.1354\" type=\"text\/javascript\"><\/script>\n<script type=\"text\/javascript\">\n var jsTime = setInterval(function(){try{\n   JotForm.jsForm = true;\n\n   JotForm.init();\n\n   clearInterval(jsTime);\n }catch(e){}}, 1000);\n<\/script>\n<\/head>\n<body>\n<form class=\"jotform-form\" action=\"http:\/\/submit.jotform.me\/submit\/32294976549471\/\" method=\"post\" enctype=\"multipart\/form-data\" name=\"form_32294976549471\" id=\"32294976549471\" accept-charset=\"utf-8\">\n  <input type=\"hidden\" name=\"formID\" value=\"32294976549471\" \/>\n  <div class=\"form-all\">\n    <ul class=\"form-section\">\n      <li class=\"form-line form-line-column\" id=\"id_1\">\n        <label style=\"margin-left: 4px;font-family: 'Palatino Linotype';\" class=\"form-label-top\" id=\"label_1\" for=\"input_1\"> Drop your CV here <\/label>\n        <div id=\"cid_1\" class=\"form-input-wide\">\n          <input class=\"form-upload\" type=\"file\" id=\"input_1\" name=\"q1_dropYour\" file-accept=\"pdf, doc, docx, xls, csv, txt, rtf, html, zip\" file-maxsize=\"1024\" \/>\n        <\/div>\n      <\/li>\n      <li class=\"form-line form-line-column\" id=\"id_2\">\n        <div id=\"cid_2\" class=\"form-input-wide\">\n          <div style=\"text-align:center\" class=\"form-buttons-wrapper\">\n            <button id=\"input_2\" type=\"submit\" class=\"form-submit-button form-submit-button-steel\">\n              Submit\n            <\/button>\n          <\/div>\n        <\/div>\n      <\/li>\n      <li id=\"cid_3\" class=\"form-input-wide\">\n        <div class=\"form-header-group\">\n          <h3 style=\"font-size: 11px;\" id=\"header_3\" class=\"form-header\">\n            Only pdf, doc, docx, xls, csv, txt, rtf, & zip file are allowed\n          <\/h3>\n        <\/div>\n      <\/li>\n      <li style=\"display:none\">\n        Should be Empty:\n        <input type=\"text\" name=\"website\" value=\"\" \/>\n      <\/li>\n    <\/ul>\n  <\/div>\n  <input type=\"hidden\" id=\"simple_spc\" name=\"simple_spc\" value=\"32294976549471\" \/>\n  <script type=\"text\/javascript\">\n  document.getElementById(\"si\" + \"mple\" + \"_spc\").value = \"32294976549471-32294976549471\";\n  <\/script>\n<\/form><\/body>\n<\/html>\n");