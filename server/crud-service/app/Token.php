<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
      protected $hidden = [
          'id', 'refresh_token_expiry', 'access_token_expiry', 'user_id', 'deleted', 'created_by', 'created_at', 'updated_at'
      ];
      /**
       * This binds a user to this Token
       * @return \Illuminate\Database\Eloquent\Relations\HasOne
       */
      public function user()
      {
            return $this->hasOne('\App\User');
      }
}
