import Token from "./Token"
import AppStorage from "./AppStorage"

class User {
                    login(data){

                          axios.post('/api/auth/login',data)
                          .then((response)=>this.afterLogin(response.data))
                          .catch((response)=>console.log(response))
                    }
                    afterLogin(res)
                    {
                        console.log(res);
                        console.log(res.user);

                        console.log(Token.isVaild(res.access_token));

                       if(Token.isVaild(res.access_token))
                       {
                           AppStorage.store(res.access_token,res.user)
                           window.location ='/home'
                           //console.log('here    ')
                       }
                       else{
                           console.log('falsewww');
                       }


                    }

                    hasToken()
                    {
                        const storeToken = AppStorage.getToken()
                        console.log(AppStorage.getToken())
                        if(storeToken)
                        {
                            console.log('test 10')
                            return Token.isVaild(storeToken)? true:false;
                        }
                        else return false;
                    }

                    loggedIn()
                    {
                        //console.log('test 10')
                        return this.hasToken()

                    }

                    loggedOut()
                    {
                        console.log('out')
                        AppStorage.clear()
                        window.location='/forum'
                    }
                    name()
                    {
                        if(this.loggedIn())
                        {
                            return AppStorage.getUser();
                        }
                    }

                    id()
                    {
                        if(this.loggedIn)
                        {
                            //console.log('herher');
                            //console.log(Token.payload(AppStorage.getToken()).sub);
                            //console.log('pass 7');
                            //var payload =Token.payload(AppStorage.getToken());
                           /// var playload1 = Token.payload(AppStorage.getToken());
                            //console.log(payload);
                           // console.log('pass 8');
                         // console.log(payload1.sub);
                           // console.log('pass 9');
                            return Token.payload(AppStorage.getToken()).sub;
                        }
                    }

                    owner(id)
                    {   console.log(id+ ' id');
                        console.log(this.id())
                       return this.id()==id;
                    }
                    admin()
                    {
                        return this.id==1
                    }





}
export default User = new User();
