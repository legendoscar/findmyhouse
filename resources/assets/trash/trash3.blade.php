DB_CONNECTION=mysql
DB_HOST=db4free.net:3306
DB_PORT=3306
DB_DATABASE=rexsteroxy
DB_USERNAME=rexsteroxy
DB_PASSWORD=amadiaustin.77


if(Input::hasFile('profile_image')){
                $file = Input::file('profile_image');
                $file->move(public_path(). '/uploads/' , $file->getClientOriginalName());
                $url = URL::to('/') . '/uploads/' . $file->getClientOriginalName();
            }