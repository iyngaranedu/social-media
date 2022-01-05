<template>
  <app-layout>
    <template #breadcrumb>
      <t-breadcrumb :breadcrumbStyle="1" :breadcrumbs="breadcrumbs"/>
    </template>
    <template #header>
      Welcome Analytics Dashboard
    </template>
    <template #subHeader>
    </template>
    <template #default>
        <div class="flex flex-wrap gap-2 items-center w-full mb-5">
            <t-button color="solid-gray" size="xl" :link="route('competitors.create')">Add New Competitor</t-button>
        </div>
      <!--Content Box-->
      <grid-section :col="3">
        <t-content-card :width="1" color="solid-yellow">
            <template #title>
                <div class="mb-2 justify-center">
                    SAS Sport (My Page)
                </div>
            </template>
            <template #subTitle>
                <div class="mb-2 justify-center">
                    Recent Post : Sneak peek for Our Friday-Sunday Clearance sale at The Uniform shoppe Manukau
                    <BR/>
                    Posted On : 28 December 2021, People Reached : 22, Engagements : 3
                    <BR/>
                    Likes : 128
                    <BR/>
                    Comments : 20
                    <BR/>
                    Shares : 10
                </div>
                <div class="mb-2 justify-center">
                    <t-progress :height="5" :value="55"  title="Users Engement (This month)"/>
                </div>
            </template>

          <template #content>
              <t-list :radius="5" class="w-full">

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>
                          Page Created : 17 September 2013
                      </template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>
                          Page Likes : 6,865
                      </template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>
                          Page Followers : 7,029
                      </template>
                  </t-list-item>


                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>Total Posts (This Month) : 2</template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>Total Posts (All Time) : 300</template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>Average Post Time : 8 AM to 12 PM (NZ Time)</template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>Likes : 200 (20%)</template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>Post Reach : 20%</template>
                  </t-list-item>

                  <t-list-item>
                      <template #icon>
                          <font-awesome-icon icon="chart-bar"/>
                      </template>
                      <template #default>Post Shared : 30%</template>
                  </t-list-item>


              </t-list>
          </template>
        </t-content-card>
          <t-content-card :width="1">
              <template #title>
                  <div class="mb-2 justify-center">
                      Aimn Oceania (Competitor)
                  </div>
              </template>
              <template #subTitle>
                  <div class="mb-2 justify-center">
                      Recent Post : A new year is here; go after your dreams in new activewear. Shop our long lasting pieces with a fusion of fashion & function 😍
                      <BR/>
                      Posted On : 05 January 2022, People Reached : 240, Engagements : 219
                      <BR/>
                      Likes : 35
                      <BR/>
                      Comments : 13
                      <BR/>
                      Shares : 8
                  </div>
                  <div class="mb-2 justify-center">
                      <t-progress :height="5" :value="60"  title="Users Engement (This month)"/>
                  </div>
              </template>

              <template #content>

                  <t-list  :radius="5" class="w-full">
                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>
                              Page Created : 15 October 2020
                          </template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>
                              Page Likes : 530
                          </template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>
                              Page Followers : 422
                          </template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Total Posts (This Month) : 2</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Total Posts (All Time) : 88</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Average Post Time : 11 AM to 10 PM</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Likes : 232 (35%)</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Post Reach : 45%</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Post Shared : 33%</template>
                      </t-list-item>


                  </t-list>
              </template>
          </t-content-card>
          <t-content-card :width="1">
              <template #title>
                  <div class="mb-2 justify-center">
                      Fearless.Wanaka (Competitor)
                  </div>
              </template>
              <template #subTitle>
                  <div class="mb-2 justify-center">
                      Recent Post : New pink french terry skirt in from Leoni.  A lovely fresh look with white sneaks and a white tee
                      <BR/>
                      Posted On : 04 January 2022, People Reached : 200, Engagements : 109
                      <BR/>
                      Likes : 20
                      <BR/>
                      Comments : 10
                      <BR/>
                      Shares : 10
                  </div>
                  <div class="mb-2 justify-center">
                      <t-progress :height="5" :value="20" color="solid-red"  title="Users Engement (This month)"/>
                  </div>
              </template>

              <template #content>

                  <t-list  :radius="5" class="w-full">
                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>
                              Page Created : 17 March 2015
                          </template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>
                              Page Likes : 118,453
                          </template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>
                              Page Followers : 120,664
                          </template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Total Posts (This Month) : 12</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Total Posts (All Time) : 800</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Average Post Time : 10 AM to 11 PM</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Likes : 232 (35%)</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Post Reach : 45%</template>
                      </t-list-item>

                      <t-list-item>
                          <template #icon>
                              <font-awesome-icon icon="chart-bar"/>
                          </template>
                          <template #default>Post Shared : 33%</template>
                      </t-list-item>


                  </t-list>
              </template>
          </t-content-card>

      </grid-section>
    </template>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import GridSection from "@/Layouts/GridSection";
import TStatisticWidget from "@/Components/Card/TStatisticWidget";
import TCashIcon from "@/Components/Icon/TCashIcon";
import TShoppingBagIcon from "@/Components/Icon/TShoppingBagIcon";
import TContentCard from "@/Components/Card/TContentCard";
import TList from "@/Components/List/TList";
import TListItem from "@/Components/List/TListItem";
import TAvatar from "@/Components/Avatar/TAvatar";
import TTable from "@/Components/Table/TTable";
import TBreadcrumb from "@/Components/Breadcrumb/TBreadcrumb";
import TProgress from "@/Components/Progress/TProgress";
import TAlert from "@/Components/Alert/TAlert";
import TInformationCircleIcon from "@/Components/Icon/TInformationCircleIcon";
import TTrashIcon from "@/Components/Icon/TTrashIcon";
import TCheckCircleIcon from "@/Components/Icon/TCheckCircleIcon";
import TButton from "@/Components/Button/TButton";

export default {
  components: {
    TCheckCircleIcon,
    TTrashIcon,
    TInformationCircleIcon,
    TAlert,
    TProgress,
    TBreadcrumb,
    TTable,
    TAvatar,
    TListItem,
    TList,
    TContentCard,
    TShoppingBagIcon,
    TCashIcon,
    TStatisticWidget,
    GridSection,
    AppLayout,
    Welcome,
      TButton,
  },
  data() {
    return {
      tableHeader: [
        {key: 'id', label: 'ID', position: 'center'},
        {key: 'name', label: 'Name', position: 'left'},
        {key: 'start', label: 'Start Date', position: 'left'},
        {key: 'end', label: 'End Date', position: 'left'},
        {key: 'status', label: 'Status', position: 'center'}
      ],
      tableContent: [
        {id: 1, name: 'VueJS Components', start: '01.03.2021', end: '14.09.2021', status: 10},
        {id: 2, name: 'Custom Style Optimize', start: '02.05.2021', end: '25.08.2021', status: 20},
        {id: 3, name: 'Error Management', start: '25.04.2021', end: '30.12.2021', status: 70},
      ],
      breadcrumbs: [
        {label: 'Home', link: '/', active: false},
        {label: 'Dashboard', link: '', active: true, activeColor: 'blue'}
      ]
    }
  }
}
</script>
