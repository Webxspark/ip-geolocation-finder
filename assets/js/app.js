/*
    * This source code was submitted by B.Alan Christofer to Codechef development team
    * Distribution of this source code without permission is illegal
    * To claim a valid licence, please contact copyright@webxspark.com for more info
*/
var app = {
    _init_() {
        this.init_eventlisteners();
        this.query(0);
    },
    init_eventlisteners() {
        $('[try]').click(() => {
            $('[type="search"]').focus();
            Wxp_DOM.scroll('[type="search"]');
            Wxp_DOM.showWarning('.search-box',{
                flicker: 1,
                interval: 2000,
                color: '#3b71ca'                
            })
        })
        $('form').submit(e => {
            app.handleFormSubmit();
            return false;
        })
    },
    handleFormSubmit() {
        var ip = $('[name="ip"]').val();
        if (!ip || ip == '') {
            this.duDialogAlert('', '<div class="alert alert-danger" role="alert" data-mdb-color="danger">Please enter an IP Address!</div>')
        } else {
            this.query(ip, false);
        }
    },
    query(ip, noIP = true) {
        $('.ip-details').attr('style', 'display: none');
        Wxp_DOM.prepend(`<loader><div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div></loader>`, $('.ip-details').parent());
        this.updateBtnState('block');
        var data = noIP ? {} : { ip: ip };
        this.fetchData(data).then(response => {
            $('loader').remove();
            this.updateBtnState('release');
            $('.ip-details').removeAttr('style');
            var ip_details = response.context.content;
            var render_data = JSON.stringify(ip_details,null, "\t");
            Wxp_DOM.render(render_data, '.pre-data');
            Wxp_DOM.render('<button class="btn btn-outline-secondary btn-rounded response-status">200-success</button>','status')
            if(ip_details.query != ip){
                $('[name="ip"]').val(ip_details.query)
            }
        })
    },
    fetchData(data = {}) {
        return $.ajax({
            url: 'https://apis.webxspark.com/v2.0/ip/geolocate?trail',
            method: "POST",
            data: data,
            dataType: 'JSON',
            error: (a, b) => { app.duDialogAlert("API response error!", "") }
        })
    },
    duDialogAlert(title, html, success = (() => {
        return null;
    }), okClick = (() => {
        return null;
    })) {
        new duDialog(title, `${html}`, {
            okText: 'Ok',
            callbacks: {
                okClick: function () {
                    okClick();
                    this.hide();
                }
            }
        });
        success();
        return true;
    },
    updateBtnState(state, html = "") {
        if (html == "") {
            var html = $('[type="submit"]').html();
        }
        if (state == "block") {
            $('[type="submit"]').prop('disabled', true)
                .attr('style', 'cursor: not-allowed !important;')
                .html(html);
        } else if (state == "release") {
            $('[type="submit"]').removeAttr('disabled')
                .removeAttr('style')
                .html(html)
        }

    }
}
app._init_();