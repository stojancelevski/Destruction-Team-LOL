var url = 'https://script.google.com/macros/s/AKfycbxKV7ter5b2o9Nwkj8wFK0kHExNtizBncyNBv1cqHFu8_KXYaRX/exec';

function getCodes()
{
    $.get(url + '?type=GET').then(
        res =>
        {
            return res;
        },
        err =>
        {
            console.log(err);
            return 'Something went wrong!';
        }
    )
}

function pushCodes(data)
{
    var newUrl = url + '?type=POST&name='+data.name +'&email='+data.email+
    '&secret='+data.secret +'&ref='+data.ref+'&lifetime='+data.lifetime+'&realtime='+data.realtime; 
    $.get(newUrl).then(
        res => 
        {
            if(res =='Ok')
            {
                return res;
            }
            else
            {
                console.log(res);
                return 'Something went wrong!';
            }
        },
        err =>
        {
            console.log(err);
            return 'Something went wrong!';
        }
    )
}