<?php

namespace HeaderX\LegacyLoader\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LegacyController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $file)
    {
        $query_string = '';

        if (count(explode('?', $request->fullUrl())) > 1) {
            $query_string = explode('?', $request->fullUrl())[1];
        }
        parse_str($query_string, $_GET);

        $file = base_path(config('legacy-loader.file_path') . $this->getCleanPath($request->path()));

        if (! str_contains($request->path(), '.php')) {
            $file = str_replace(['.html', '.php', '.txt'], '', $file) . '.php';
        }
        if (file_exists($file)) {
            // ob_start();
            require_once($file);

        // return new Response(ob_get_clean());
        } else {

            /**
             * Todo: Exceptions
             */
            abort(404);
        }
    }

    protected function getCleanPath(string $path)
    {
        return str_replace(config('legacy-loader.route_prefix'), '', $path);
    }
}
