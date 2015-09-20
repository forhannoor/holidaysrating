$(document).ready(function()
{
    /* dynamic drop down list for countries */
    $('select[name=Region]').change(function()
    {
        var region = $(this).val();
        
        $.get(base_url + 'index.php/home/countrylist/' + region, function(data)
        {
            $("#countrylist").html(data);         
        }); 
    });
    
    /* add to bucket list */
    $('#add_to_bucket').click(function(e)
    {
        e.preventDefault();
        $.get(BASE + 'index.php/user/add_to_bucket', function(data){});
        alert("Added to bucket list!");
    });
});