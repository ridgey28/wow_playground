$(function () {
    /*global $:false */
    /*jslint browser: true, devel: true */

    //jQuery UI Dialogies
    var $dialog = $('<div></div>')
        .html('Item(s) have been successfully deleted')
        .dialog({
            autoOpen: false
        });
    var $dialog2 = $('<div></div>')
        .html('No checkboxes are checked!')
        .dialog({
            autoOpen: false,
            title: 'Error'
        });
    //end

    /*PHP and jQuery checkbox array with a hint of Jquery UI Demo*/

    /*Adds new checkbox to the form*/
    $("#addBtn").click(function () {
        $("#cbox").add('<li class="add"><label><input class="new" type="checkbox" name="deleteCB" value="Added" />Added</label></li>').prependTo("#cbox");

    });

    /*The save button saves all newly added checkboxes*/
    $("#saveBtn").click(function () {
        var data = $(".new").map(function (i, n) { /*Gets all newly added checkboxes*/
            return $(n).val();
        }).get();

        var find = $(".new").size(); //checks to see if any new checkboxes have been added

        if (find === 0) { //alert if no checkboxes have been added

            window.alert("There is nothing to save!");

        } else { //process and save them to database

            $.ajax({
                type: "POST",
                url: "php/process.php?page=1",
                data: {
                    'deleteCB': data
                }
            }).done(function () {
                location.reload();
            });
        }
    });
    
    /*Select all inputs and swap text*/
    $("#selectAll").click(function () { //user clicks on select all checkbox
        /*Lets first swap label text*/
        var $this = $("label[for='select_all']");
        var ctext = $this.text();//grab curent text
        var stext = $this.data('text-swap');//swap text
            $this.text(stext).data('text-swap', ctext);//swap back
        
        
        var checked_status = this.checked; //assign variable 
        $('input[name="deleteCB"]').each(function () { //for each checkbox
            this.checked = checked_status; //tick the boxes
        });
    }); //end


    //prevents form from being submitted
    $("#delete_form").submit(function (e) {
        return false;
    });

    /*Deletes any checked checkboxes*/

    $("#deleteBtn").click(function () {
        if ($('input[name=deleteCB]').is(':checked')) {//if any checkboxes are checked
            $("#dialog-confirm").dialog({//shows jquery ui confirmation dialog
                modal: false,
                width: 450,
                buttons: {//setup buttons
                    "Delete all items": function () {//if you click on delete all items button
                        $(this).dialog("close");//closes the dialog
                        var cbox = $("#delete_form :checkbox:checked").map(function () {//assigns cbox to all the checkboxes in the form
                            return $(this).val();//returns the value
                        }).get();//gets the value, stored in cbox

                        $.ajax({//send to server to process
                            type: "POST",
                            url: "php/process.php?page=2",//url to send to
                            data: {//the data to send
                                'deleteCB': cbox
                            }
                        }).done(function () {//once done reload
                            location.reload();
                        });


                    },
                    Cancel: function () {//if user clicks on cancel nothing will be deleted
                        $(this).dialog("close");
                        return false;
                    }
                } //end buttons
            });
        } else {
            $dialog2.dialog("open");//display no checkboxes checked message
        }
    }); //end

    /*end PHP and jQuery checkbox array with a hint of Jquery UI Demo*/


    /*jQuery Disable and Enable Form Elements Using a Checkbox*/
    $("input[name='enable']").click(function () { //user clicks on checkbox
        var input = $('input.textbox:text'); //assign a variable to all the textboxes
        
        
        if ($(this).is(':checked')) { //if checkbox is checked
            input.attr("disabled", false); //disable fields
        } else if ($(this).not(':checked')) { //if not checked
            if (input.val() !== '') { //see if any of the boxes have text in them
                //if they do bring up confirmation
                var ok = confirm('Are you sure you want to remove all data?');
                if (ok) {
                    input.val(''); //empty values
                    input.attr("disabled", true); //disable fields
                }
            } else { //if boxes don't have any text in them disable fields
                input.attr("disabled", true);
            }

        }
    }); //end 
});