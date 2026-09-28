param([int]$Port = 8081)
$ErrorActionPreference = 'Stop'
$php = Get-Command php -ErrorAction SilentlyContinue
if (-not $php) { throw 'PHP introuvable : ajoutez PHP au PATH ou utilisez WampServer.' }
$argsPhp = @()

Write-Host "Site local : http://127.0.0.1:$Port/ - Ctrl+C pour arrêter."
& $php.Source @argsPhp -S "127.0.0.1:$Port" -t (Join-Path $PSScriptRoot 'public')
