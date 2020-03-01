class Token{

    isVaild(token)
    {
        const payload = this.payload(token);


        if(payload)
        {
            console.log(payload);
            return payload.iss=="http://pluspackv2.test/api/auth/login" || "http://pluspackv2.test/api/auth/signup"? true : false;
            //console.log('test');
        }
        else false
    }
    payload(token)
    {
       // console.log('pass1');
        const payload = token.split('.')[1];
        //console.log(token);
      //  console.log(this.decode(payload));
        //console.log('hehr');
      //  console.log('pass2');
       // console.log(this.decode(payload));
        //console.log('pass 5');
        return this.decode(payload);
    }

    decode(payload)
    {
       // console.log(payload+"pass4");
       // console.log(atob(payload)+'pass 5');
       // console.log(JSON.parse(atob(payload)));
        //console.log('pass 6');
        return JSON.parse(atob(payload));
    }

}
export default Token = new Token()
