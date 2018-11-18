var url = window.location.origin + "/furukawa/app.php";

function getClientsAjax(){
	
	jQuery.ajaxSetup({
        async: false,
        cache: false
    });

    jQuery.ajax({
        url: url,
        type: "GET",
        crossDomain: true,
        data: {
            action: 'getClients',
        },
        success: function (data, textStatus, jQxhr) {
			if(parseInt(jQxhr.status) === 200){
				var table_html ='';
				for (var i = 0; i < data.length; i++) {
						table_html+='<tr>';
                        table_html+='<th scope="row"><input type="checkbox"></th>';
                        table_html+='<td>'+data[i].codigo+'</td>';
                        table_html+='<td>'+data[i].nombres+'</td>';
                        table_html+='<td>'+data[i].apellidos+'</td>';
                        table_html+='<td>'+data[i].dni+'</td>';
                        table_html+='<td>'+data[i].razonsocial+'</td>';
                        table_html+='<td>'+data[i].ruc+'</td>';
                        table_html+='<td>'+data[i].telefono+'</td>';
                        table_html+='<td>'+data[i].tippersona+'</td>';
                        table_html+='</tr>';
				}
				
				jQuery('#tb_clientes tbody').html(table_html);
			}			
           
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jQxhr.status);
        }
    });
    return;
}

function evtKeypressStopEmail(evt) {
    if (evt.altKey === true) {
        evt.stopImmediatePropagation();
        return false;
    }
}

function gotoBottom(id) {
    var element = document.getElementById(id);
    element.scrollTop = element.scrollHeight - element.clientHeight;
}


$.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

	/*
        $('#btnModificarModificar').on('click', function () {
			
			console.log(22222222222222222222222222222);
			return;
           var formData = $('#frm_new_client').serializeObject();
		   jQuery.ajaxSetup({
				async: false,
				cache: false
			});
			
			jQuery.ajax({
				url: url,
				type: "GET",
				crossDomain: true,
				data: formData,
				success: function (data, textStatus, jQxhr) {
					if(parseInt(jQxhr.status) === 200){
						getClientsAjax();
					}			
				   
				},
				error: function (jqXhr, textStatus, errorThrown) {
					console.log(jQxhr.status);
				}
			});
			return;
        });
*/
		
		
	

$(document).ready(function () {

	
	/*$('#ModalCrear').on('show.bs.modal', function () {
		$('#btnModificarModificar').on('click', function () {
			var formData = $('#frm_new_client').serializeObject();
			jQuery.ajaxSetup({
				async: false,
				cache: false
			});
			
			jQuery.ajax({
				url: url,
				type: "GET",
				crossDomain: true,
				data: formData,
				success: function (data, textStatus, jQxhr) {
					if(parseInt(jQxhr.status) === 200){
						getClientsAjax();
					}			
				   
				},
				error: function (jqXhr, textStatus, errorThrown) {
					console.log(jQxhr.status);
				}
			});
			return;
		});
	}); */


	//getClientsAjax();
    /*var btnSendMessage = jQuery('#btn-chat');
	var btnSendLogin = jQuery('#envia-chat');
	var txtUserName = jQuery('#nameChat');
	var txtUserEmail = jQuery('#emailChat');
	var txtMessageChat = jQuery('#btn-input');
	
	
	txtUserEmail.filter_input({regex: '[a-zA-Z0-9._@-]'});
	txtUserName.filter_input({regex: '[a-zA-Zá-úÁ-Ú-Úä-üÄ-Ü \'\"¨-]'});
	txtMessageChat.filter_input({regex: '[a-zA-Zá-úÁ-Ú-Úä-üÄ-Ü \'\"¨-]'});
	

	txtUserEmail.on("change paste keyup", function () {
        if ($(this).val().charAt(0) === ' ') {
            txtUserEmail.val('');
        }
    });
	
	txtUserName.on("change paste keyup", function () {
        if ($(this).val().charAt(0) === ' ') {
            txtUserName.val('');
        }
    });
	
	txtMessageChat.on("change paste keyup", function () {
        if ($(this).val().charAt(0) === ' ') {
            txtMessageChat.val('');
        }
    });
	
	jQuery('#btn-input').bind("enterKey",function(e){
		jQuery("#btn-chat").trigger( "click" );
	});
	jQuery('#btn-input').keyup(function(e){
		if(e.keyCode == 13)
		{
			$(this).trigger("enterKey");
		}
	});
	
	
    btnSendMessage.off('click');
    btnSendMessage.on('click', function (evt) {
        var txtMessage = jQuery('#btn-input').val();
        if (txtMessage !== ' ') {
            printMessage(txtMessage);
            jQuery('#btn-input').val('');
            sendMessage(txtMessage);
        }
    });
	
	btnSendLogin.off('click');
    btnSendLogin.on('click', function (evt) {
        var txtUserName = jQuery('#nameChat').val();
		var txtUserEmail = jQuery('#emailChat').val();
		sendLogin(txtUserName,txtUserEmail);
    });
		*/
});
