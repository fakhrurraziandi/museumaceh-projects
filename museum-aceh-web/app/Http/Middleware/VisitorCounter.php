<?php

namespace App\Http\Middleware;

use Closure;
use App\Visitor;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;


class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = $this->getUserIpAddr();
        $agent = new Agent();
        $device = ($agent->isMobile() or $agent->isTablet()) ? 'mobile' : 'pc';
        // dd($device);
        if(Visitor::where('ip', $ip)->whereDate('created_at', Carbon::today())->count() == 0){
            Visitor::create([
                'ip' => $ip,
                'device' => $device,
            ]);
        }
        
        return $next($request);
    }

    public function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
