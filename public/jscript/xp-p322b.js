$(function(){if(navigator.appVersion.match(/MSIE [0-9]+/))$('body').append($('<div id="ieTipsBox"><a href="/caution/upbrowser?referrer='+window.location.href+'"><span>Browser access below IE11 may cause problems such as view confusion and security. It is recommended that you upgrade your browser. </span><i>Read More</i></a></div>'))});
 $(function(){var hd=$('#b_5c46df5689f010 [module-setting="hd"]').val(),pd=$('#b_5c46df5689f010 [module-setting="padding"]').val(),posi=$('#b_5c46df5689f010 [module-setting="posi"]').val(),tit=$('#b_5c46df5689f010 [module-setting="title"]').val();$('#b_5c46df5689f010').find('.left').addClass(tit);$('#b_5c46df5689f010').parents('.item').attr('data-state',hd);$('#b_5c46df5689f010').parents('.item').attr('data-posi',posi);$('#b_5c46df5689f010').parents('.item').css({'padding-top':pd,'padding-bottom':pd})});
 var tem11_pro_detail_sm_bo1=new Swiper('.tem11-pro-detail-sm .gallery-top',{pagination:'.swiper-pagination',paginationClickable:!0,simulateTouch:!1,});var tem11_pro_detail_sm_bo2=new Swiper('.tem11-pro-detail-sm .gallery-thumbs',{spaceBetween:10,slidesPerView:5,touchRatio:0.2,nextButton:'.tem11-pro-detail-sm .swiper-button-next',prevButton:'.tem11-pro-detail-sm .swiper-button-prev',});$(".tem11-pro-detail-sm .min_wrap").delegate(".swiper-slide","click",function(){console.log($(this).parents(".tem11-pro-detail-sm").find(".gallery-top .swiper-pagination-bullet").eq($(this).index()));$(this).parents(".tem11-pro-detail-sm").find(".gallery-top .swiper-pagination-bullet").eq($(this).index()).click();$(this).parent().find(".swiper-slide").removeClass("active")
$(this).addClass("active");$(this).parents(".tem11-pro-detail-sm").find(".bigpic_wrap .zoom_pic img").attr("src",$(this).find("img").attr("val"))})
$(function(){tem11_pro_detail_sm($(".tem11-pro-detail-sm .bigpic_wrap"));function tem11_pro_detail_sm($div){var mark=$div.find(".mark");var max_img=$div.find(".zoom_pic");$div.find(".gallery-top .swiper-slide").hover(function(e){if($(window).width()<992){return}
e.stopPropagation();$(this).parents(".bigpic_wrap").find(".mark").show();$(this).parents(".bigpic_wrap").find(".zoom_pic").show()},function(){$(this).parents(".bigpic_wrap").find(".mark").hide();$(this).parents(".bigpic_wrap").find(".zoom_pic").hide()}).mousemove(function(e){var l=e.pageX-$(this).parents(".bigpic_wrap").find(".mark").width()/2-$(this).offset().left;var t=e.pageY-$(this).parents(".bigpic_wrap").find(".mark").height()/2-$(this).offset().top;if(l<0){l=0}else if(l>=$(this).parents(".bigpic_wrap").find(".gallery-top .swiper-slide").width()-$(this).parents(".bigpic_wrap").find(".mark").width()){l=$(this).parents(".bigpic_wrap").find(".gallery-top .swiper-slide").width()-$(this).parents(".bigpic_wrap").find(".mark").width()}
if(t<0){t=0}else if(t>=$(this).parents(".bigpic_wrap").find(".gallery-top .swiper-slide").height()-$(this).parents(".bigpic_wrap").find(".mark").height()){t=$(this).parents(".bigpic_wrap").find(".gallery-top .swiper-slide").height()-$(this).parents(".bigpic_wrap").find(".mark").height()}
$(this).parents(".bigpic_wrap").find(".mark").css({left:l,top:t});$(this).parents(".bigpic_wrap").find(".zoom_pic").find("img").css({left:-l*2,top:-t*2})})}});
 $("[data-content='cms_desc'] img").load(function(){if($(this).width()>$(this).parent().width()||$(this).attr("width")>$(this).parent().width()){$(this).attr("width","");$(this).attr("height","");$(this).css("width","100%");$(this).css("height","")}});$("[data-content='cms_desc'] table").addClass("table table-bordered");
 $('.tem02-pro-detail-sm .pro-detail-tab .nav-tabs').on('click','.li',function(){$(this).addClass('bg-color font-color').siblings().removeClass('bg-color font-color')});$('.tem02-pro-detail-sm .comment-con .comment-info .percent-info .tag-list').on('click','.tag-name',function(){$(this).addClass('active').siblings('span').removeClass('active')});$('.tem02-pro-detail-sm .comment-con .comment-list .tab-main .filter-list').on('click','li',function(){$(this).addClass('font-color').siblings('li').removeClass('font-color')});$(".tem02-pro-detail-sm .comment-con").on('click','.tab-con .imgbox .imgitems .img-item img',function(){$(this).parent('.img-item').toggleClass('active').siblings('.img-item').removeClass('active');$(this).parents('.imgitems').siblings('.imgviewer').find("img").attr("src",$(this).attr("src"));$(this).parents('.imgitems').siblings('.imgviewer').toggleClass('active')});

    var url = 'xp-p322b';
    // $(function() {
    //     $(".tem02-pro-detail-sm .comment-con .comment-list .tab-main .filter-list li").click(function(){
    //         var comment_type = $(this).data('type');
    //         $('input[name="comment_type"]').val(comment_type);
    //         //console.log(comment_type);
    //         $(this).parents("form").submit();
    //         var commentConTop = $(this).parents(".comment-con").offset().top;
    //         $(window).scrollTop(commentConTop);
    //     });
    // });
    $(function() {
        function formatDateTime(inputTime) {
            var date = new Date(inputTime * 1000);
            var y = date.getFullYear();
            var m = date.getMonth() + 1;
            m = m < 10 ? ('0' + m) : m;
            var d = date.getDate();
            d = d < 10 ? ('0' + d) : d;
            var h = date.getHours();
            h = h < 10 ? ('0' + h) : h;
            var minute = date.getMinutes();
            var second = date.getSeconds();
            minute = minute < 10 ? ('0' + minute) : minute;
            second = second < 10 ? ('0' + second) : second;
            return y + '-' + m + '-' + d+' '+h+':'+minute+':'+second;
        };
        $(".tem02-pro-detail-sm .comment-con .comment-list .tab-main .filter-list li").click(function(){
            var comment_type = $(this).data('type');
            var _this = $(this);
            $.ajax({
                url:'/' + url,
                data:{comment_type:comment_type},
                type:'get',
                dataType:'json',
                success:function(json){
                    var info = '';
                    $.each(json.data, function(i, v) {
                        info += `<div class="tab-con">
                                <div class="items">
                                    <div class="comment-item">
                                        <div class="user-column">
                                            <div class="user-info">
                                                <img src="/templates/public4/assets/images/m-tem01-myaccount.png">
                                                <span>`;
                        info += v['user_name'];
                                                info +=`</span>
                                            </div>
                                        </div>
                                        <div class="comment-column">
                                            <div class="comment-star">
                                                <span class="tem01-score  OFF">`;
                    for(var  j= 1; j<= v['score']; j++){
                        info += `<i class="icon- font-color"></i>`;
                    }
                    for(var j = 0; j<(5 - v['score']); j++){
                        info += `<i class="icon-"></i>`;
                    }
                            info +=`</span>
                                        </div>
                                            <p class="comment-message">`;
                            info +=v['interaction_content'];
                            info +=`</p>
                                        <div class="imgbox">
                                            <div class="imgitems">
                                                <div class="img-item">
                                                    <img src="`
                            info +=v['interaction_path'];
                            info += `">
                                        </div>
                                            </div>
                                                <div class="imgviewer">
                                                    <img src="">
                                                </div>
                                            </div>
                                        <div class="order-info">

                                            <span class="comment-time ml15">`
                            info += v['interaction_time'] ? formatDateTime(v['interaction_time']) : ''
                            info +=`</span>
                                        </div>`
                                            if( v['child'] != "" ){
                                                $.each(v['child'], function(k, item) {
                                                    if(  item['interaction_content'] !=""){
                                                        info +=`<div class="comment-reply">
                                                    <p>Merchant replyï¼š</p>
                                                    <div class="comment-message mt5">`;
                                                        info +=item['interaction_content'];
                                                        info +=`</div><p class="comment-time mt5">`;
                                                        info += formatDateTime(item['interaction_time']);
                                                        info +=`</p></div>`;
                                                    }
                                                });
                                            }
                            info +=     `</div>
                                    </div>
                                </div>
                            </div>`
                    });
                    $('#ajax').html(info);
                }
            });
        });
        // å¯¼èˆªå®šä½
        $(window).scroll(function(){
            var module_position = $('.nav_5d91666151a311 .fixed[module-style="position"]');
            if (module_position.length>0) {
                var top = module_position.parent().offset().top;
                var width = module_position.parent().width();
                var height = module_position.height();
                var winSt=$(window).scrollTop();
                if (winSt>=top&&$(window).width()>992) {
                    module_position.addClass("position_fixed").width(width);
                    module_position.parent().height(height);
                    if ($('.module-content-generation .mockup').length>0) {
                        var top_index = -1;;
                        $('.module-content-generation .mockup').each(function(i){
                            if (winSt>=$(this).offset().top-height&&winSt<=$(this).offset().top-height+$(this).height()) {
                                top_index = i;
                                return false;
                            }
                        });
                        module_position.find(".anchored_link li").removeClass("active font-color");
                        if (top_index>=0) {
                            module_position.find(".anchored_link li").eq(top_index).addClass("active font-color");
                        }
                    }
                }else {
                    module_position.removeClass("position_fixed").width("auto");
                    module_position.parent().height("auto");
                }

            }
        });
        if ($('.nav_5d91666151a311 .fixed[module-style="position"]').length>0) {
            $('.module-content-generation .mockup').each(function(){
                var that = $(this);
                var title = that.find('.pdm-headbox .pdm-head-title').text();
                var li = $('<li><a class="link_a">'+title+'</a></li>');
                $('.nav_5d91666151a311 .anchored_link ul').append(li);
                li.click(function(){
                    var height = $('.nav_5d91666151a311 .fixed[module-style="position"]').height();
                    $("body,html").stop().animate({
                        scrollTop:that.offset().top-height+2
                    });
                });
            });
        }

        if ($('.module-content-generation').length>0) {
            $('.module-content-generation [modular-name]').each(function(){
                var img_data_prodetail = $(this).find('img[data-prodetail]');
                if (img_data_prodetail.length>0) {
                    if (img_data_prodetail.attr("src")=="") {
                        img_data_prodetail.parents('[data-prodetail="img-ul"]').hide();
                    }
                }
                if (img_data_prodetail.length%3==0) {
                    img_data_prodetail.parents('[modular-name]').addClass('display-3');
                }
            });
        }

    });
;
 $("[data-action='comment-pages'] a").bind('click',function(){$.ajax({url:$(this).attr("href"),dataType:"json",success:function(json){if(json){var html="";var content=$("[data-action='comment-list']> div");$.each(json.list,function(con,val){content.find("[data-comment='name']").html(val.user_name);content.find("[data-comment='content']").html(val.interaction_content);content.find("[data-comment='time']").html(new Date(parseInt(val.interaction_time)*1000).pattern("yyyy-MM-dd hh:mm:ss"));html+="<div class='media comment-list "+(parseInt(val.is_admin)?'reply':'')+"'>"+content.html()+"</div>"});$("[data-action='comment-list']").html(html)}}});return!1});Date.prototype.pattern=function(fmt){var o={"M+":this.getMonth()+1,"d+":this.getDate(),"h+":this.getHours()==0?12:this.getHours(),"H+":this.getHours(),"m+":this.getMinutes(),"s+":this.getSeconds(),"q+":Math.floor((this.getMonth()+3)/3),"S":this.getMilliseconds()};var week={"0":"\u65e5","1":"\u4e00","2":"\u4e8c","3":"\u4e09","4":"\u56db","5":"\u4e94","6":"\u516d"};if(/(y+)/.test(fmt)){fmt=fmt.replace(RegExp.$1,(this.getFullYear()+"").substr(4-RegExp.$1.length))}
if(/(E+)/.test(fmt)){fmt=fmt.replace(RegExp.$1,((RegExp.$1.length>1)?(RegExp.$1.length>2?"\u661f\u671f":"\u5468"):"")+week[this.getDay()+""])}
for(var k in o){if(new RegExp("("+k+")").test(fmt)){fmt=fmt.replace(RegExp.$1,(RegExp.$1.length==1)?(o[k]):(("00"+o[k]).substr((""+o[k]).length)))}}
return fmt}
$('.pages_5d91666153ab22').val(location.href);new formIframe('5d91666153ab22');
 $(function(){let textareanum=1000,cmsid=$('#i_5d916661557d23 input[name="cmsId[]"]').val(),comlisthtml="",user_id="",user_name="";if(cmsid!=""){$.ajax({url:"/cms/new-comment-api",type:"POST",dataType:"json",data:{'cms_id':cmsid,'way':'getList','pages':'1','limits':"5"},async:!1,success:function(data){let dataall=data.data.list;if(data.data.member!=undefined){user_id=data.data.member.uid;user_name=data.data.member.username}
if(dataall!=""){for(let i=0;i<dataall.length;i++){let comlist='<div class="items" id='+dataall[i].interaction_id+' userid='+dataall[i].user_id+'>';comlist+='<div class="item flexBoxWrap">';comlist+='<div class="username">'+formatName(dataall[i].user_name)+'</div>';comlist+='<div class="comdetail">';comlist+='<div class="score" score='+dataall[i].score+'></div>';comlist+='<div class="comment">'+dataall[i].interaction_content+'</div>';if(dataall[i].interaction_path!=""){comlist+='<div class="commentimg"><img lazy-src='+dataall[i].interaction_path+' /></div>';comlist+='<div class="commentimgbox">'
comlist+='<img lazy-src='+dataall[i].interaction_path+' />'
comlist+='<div class="commentimgclose">Ã—</div>'
comlist+='</div>'}
comlist+='<div class="date">'+ComTime(dataall[i].interaction_time).d+'&nbsp;'+ComMonth(dataall[i].interaction_time)+'&nbsp;'+ComTime(dataall[i].interaction_time).y+'</div>';if(dataall[i].comment_reply!=""){comlist+='<div class="comitems">';for(let l=0;l<dataall[i].comment_reply.length;l++){comlist+='<div class="comitem" data-id='+dataall[i].comment_reply[l].reply_id+' is-admin='+dataall[i].comment_reply[l].is_admin+'>';if(dataall[i].comment_reply[l].admin_name!=""){comlist+='<div class="name">['+dataall[i].comment_reply[l].admin_name+']</div>'}else{comlist+='<div class="name">['+formatName(dataall[i].user_name)+']</div>'}
comlist+='<div class="comment">'+dataall[i].comment_reply[l].reply_content+'</div>';comlist+='<div class="datebox flexBoxWrap">';comlist+='<div class="date">'+ComTime(dataall[i].comment_reply[l].reply_time).d+'&nbsp;'+ComMonth(dataall[i].comment_reply[l].reply_time)+'&nbsp;'+ComTime(dataall[i].comment_reply[l].reply_time).y+'</div>';comlist+='</div>';comlist+='</div>'}
comlist+='</div>'}
comlist+='</div>';comlist+='</div>';comlist+='</div>';comlisthtml+=comlist}
$('.i_5d916661557d23').html(comlisthtml);$('#i_5d916661557d23 .score').each(function(){let score=$(this).attr('score');scoreshow($(this),{scorenum:score,type:5,imgsrc:'/templates/public4/assets/images/score1.png',curimgsrc:'/templates/public4/assets/images/score2.png',imgwidth:'15',imgheight:'15',num:5,readonly:!1,decimal:!1})});if(data.data.member!=undefined){$('.i_5d916661557d23 .items').each(function(){if($(this).attr('userid')==data.data.member.uid){if($(this).find('.comitem:last').attr('is-admin')=="1"){$(this).find('.comitem:last').find('.datebox').append('<div class="reply">reply</div>')}}})}}else{$('.i_5d916661557d23').html('<div class="designerShow" style="font-size:50px;color:#DDD;">ç¤¾åª’æš‚æ— è¯„è®º</div>')}},error:function(data){console.log(data)}})}
let comHtml='<div class="comI">';comHtml+='<div class="comI_text">';comHtml+='<textarea name="text" cols="30" rows="10"></textarea>';comHtml+='<div class="textnum">';comHtml+='<span>0</span>/<span>0</span>';comHtml+='</div>';comHtml+='</div>';comHtml+='<div class="commentfoot flexBoxWrap">';comHtml+='<div class="commbtn cancel">Cancel</div>';comHtml+='<div class="commbtn submit active">Submit</div>';comHtml+='</div>';comHtml+='</div>';$(document).on('click','#i_5d916661557d23 .commentimg',function(){$(this).siblings('.commentimgbox').addClass('active');$(this).addClass('active')});$(document).on('click','#i_5d916661557d23 .commentimgclose',function(){$(this).parent('.commentimgbox').removeClass('active');$(this).parent('.commentimgbox').siblings('.commentimg').removeClass('active')});$(document).on('click','#i_5d916661557d23 .reply',function(){if($(this).closest('#i_5d916661557d23 .comdetail').find('.comI').length==0){$(this).closest('#i_5d916661557d23 .comdetail').append(comHtml)}
$('#i_5d916661557d23 .comI .textnum span').eq(1).html(textareanum)});$(document).on('click','#i_5d916661557d23 .cancel',function(){$(this).closest('#i_5d916661557d23 .comdetail').find('.comI').remove()});$(document).on('click','#i_5d916661557d23 .submit',function(){let comment_id=$(this).closest('.items').attr('id'),content=$(this).closest('.comI').find('textarea').val();if(!$(this).hasClass('active')){$.ajax({url:"/cms/new-comment-api",type:"POST",dataType:"json",data:{'cms_id':cmsid,'comment_id':comment_id,'content':content,"way":"reply",'user_id':user_id,'user_name':user_name},async:!1,success:function(data){if(data.status==1){$('#i_5d916661557d23 .commentPopup').addClass('active');$('#i_5d916661557d23 .closePopup').removeClass('active');setTimeout(function(){$('#i_5d916661557d23 .commentPopup').removeClass('active');$('#i_5d916661557d23 .closePopup').addClass('active');location.reload()},2000);$('#i_5d916661557d23 .items .comI').remove()}else{alert(data.message)}},error:function(data){console.log(data)}})}});$('#i_5d916661557d23 .icon-clear').click(function(){$('#i_5d916661557d23 .commentconter').removeClass('active');$('#i_5d916661557d23 .commentPopup').removeClass('active');$('#i_5d916661557d23 .closePopup').addClass('active');location.reload()});function javaTrim(str){for(var i=0;(str.charAt(i)==' ')&&i<str.length;i++);if(i==str.length)return'';var newstr=str.substr(i);for(var i=newstr.length-1;newstr.charAt(i)==' '&&i>=0;i--);newstr=newstr.substr(0,i+1);return newstr}
$(document).on('keyup focus','#i_5d916661557d23 .comI textarea',function(){let len=$(this).val().length,reg=$(this).val().replace(/\n/g,'');if(len<=textareanum){$('#i_5d916661557d23 .comI .textnum span').eq(0).html(len)}else if(len>textareanum){$(this).val($(this).val().substring(0,textareanum))}
if(len!=0&&javaTrim(reg)!=""){$('#i_5d916661557d23 .commentfoot .submit').removeClass('active')}else if(len==0){$('#i_5d916661557d23 .commentfoot .submit').addClass('active')}})});
 $(document).ready(function(){$('.pages_5c998e718141b28').val(location.href);$("#inquire_form").bootstrapValidator({feedbackIcons:{valid:'icon-checkmark',invalid:'icon-cancel3',validating:'icon-refresh'},fields:{name:{validators:{notEmpty:{message:"Do not allow empty"}}},phone:{validators:{notEmpty:{message:"Do not allow empty"}}},contents:{validators:{notEmpty:{message:"Do not allow empty"}}},email:{validators:{notEmpty:{message:"Do not allow empty"},emailAddress:{message:"Please enter a valid e-mail format"}}},yzm:{validators:{notEmpty:{message:"Do not allow empty"}}}}})});
 $(document).ready(function(){$("#inquire_form").bootstrapValidator({feedbackIcons:{valid:'icon-checkmark',invalid:'icon-cancel3',validating:'icon-refresh'},fields:{contents:{validators:{notEmpty:{message:"Do not allow empty"}}},email:{validators:{notEmpty:{message:"Do not allow empty"},emailAddress:{message:"Please enter a valid e-mail format"}}},yzm:{validators:{notEmpty:{message:"Do not allow empty"}}}}})});
 function downloadApp(){$('#download-app img').each(function(){$(this).attr('src',$(this).data('src'))})}
var userAgent=window.navigator.userAgent;if(userAgent.toLowerCase().match(/MicroMessenger/i)=='micromessenger'){$(".app-wechat").show()}else if(userAgent.indexOf("Safari")>-1&&userAgent.indexOf("iPhone")>-1){$(".app-safari").show()}else{if($(".app-android").length){$(".app-android").show()}else{$("[data-content='create-app']").hide()}};
 var mqChatFanyi=["Do not allow empty","Please enter a valid e-mail format","Name","Phone","E-mail","Content","Chat Online","verification code is incorrect","E-mail address does not exist","The sending failed, This may be a malformed format of the mailbox, Please check the following contents.","Quantity"];
 $(function(){var $class=$('.mobile_bottom');if($class.find('.icon-uniE633').parent().attr('href')=='tel:')$class.find('.icon-uniE633').parents('li').addClass('hide');if($class.find('.icon-uniE621').parent().attr('href')=='sms:')$class.find('.icon-uniE621').parents('li').addClass('hide');if($class.find('.icon-uniE63A').parent().attr('href')=='mailto:')$class.find('.icon-uniE63A').parents('li').addClass('hide');$('.mobile-bottom ul li').click(function(){$(this).find('span, i').addClass('font-color').parent('a').parent('li').siblings().find('span, i').removeClass('font-color')});$('#mobile_bottom_iquire').click(function(){if($('body').hasClass('cms_product')){if($('#cms_comment').length)$('html,body').animate({scrollTop:$('#cms_comment').offset().top-80},800);else if($('#inquire_form').length)$('html,body').animate({scrollTop:$('#inquire_form').offset().top-80},800)}else $(this).attr('href','/inquire/cart')});var _share=$('.tem01-beshare.addClass').parent('[widget-style="wrap"]');var _time=500;var timer1=null;var timer2=null;if(!_share.length||_share.hasClass('hidden')||!_share.find('li').length){$class.find('.icon-share').parents('li').addClass('hidden')};$('#mobile_bottom_share').on('click',function(){var _item=_share.find('.tem01-beshare.addClass');_item.toggleClass('on');if(_item.hasClass('on')){clearTimeout(timer2);_item.css('display','block');timer1=setTimeout(function(){_item.addClass('startAnimation')},10)}else{clearTimeout(timer1);_item.removeClass('startAnimation');timer2=setTimeout(function(){_item.css('display','none')},_time)}})});var navactive=function(activeobj){if(!$('body').hasClass('designer-body')){$('[prodetails-con]').hide();$('[prodetails-con='+activeobj+']').show()}}