from apscheduler.schedulers.blocking import BlockingScheduler
from datetime import datetime
from requests import get

url = "https://mux-dl.herokuapp.com/"


def timedWake():
    tInfo = datetime.now().strftime("%Y/%m/%d %H:%M:%S")
    response = f'<Response {get(url).status_code}>'
    print(f'Routine wake: {response} at {tInfo}')


scheduler = BlockingScheduler(timezone='Asia/Taipei')
for section in ['0-2', '8-23']:
    scheduler.add_job(
        timedWake, 'cron',
        day_of_week='mon-fri',
        hour=section, minute='*/20'
    )
scheduler.start()
