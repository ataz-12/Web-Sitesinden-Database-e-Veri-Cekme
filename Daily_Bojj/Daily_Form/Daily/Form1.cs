using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Windows.Forms.DataVisualization.Charting;
using System.Data.SqlClient;

namespace Daily
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        static string conn = "Server=AHMETA;;Database=Test; User=rasyonetsa; Password=ras2001; ";
        SqlConnection baglanti = new SqlConnection(conn);
        SqlDataAdapter da;
        DataTable table;
        string kayit = "Select * from Daily where rate >0";
        string delete = "Delete from G_Daily";

        private void Form1_Load(object sender, EventArgs e)
        {
            baglanti.Open();
            SqlCommand cmd = new SqlCommand(delete, baglanti);
            SqlCommand komut = new SqlCommand(kayit, baglanti);
            da = new SqlDataAdapter(komut);
            table = new DataTable();
            da.Fill(table);
            dataGridView1.DataSource = table;
            cmd.ExecuteNonQuery();
            baglanti.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            
            // Yenile
            DataView dv = table.DefaultView;
            dv.RowFilter = string.Format("date >= '{0}' AND date <= '{1}'", dateTimePicker1.Value.Date, dateTimePicker2.Value.Date);
            dataGridView1.DataSource = dv;
            baglanti.Open();
            SqlCommand cmd = new SqlCommand(delete, baglanti);
            cmd.ExecuteNonQuery();
            baglanti.Close();
            for (int i = 0; i < dataGridView1.Rows.Count - 1; i++)
            {
                // dataGridView1.Columns[0].DefaultCellStyle.Format = "dd/MM/yyyy";
                string g_kayit = " INSERT INTO G_Daily(date,currency,rate) VALUES (@date,@currency,@rate)";
                SqlCommand cmd2 = new SqlCommand(g_kayit, baglanti);
                //dataGridView1.Rows[i].Cells[0].Value + "','" + dataGridView1.Rows[i].Cells[1].Value + "','" + dataGridView1.Rows[i].Cells[2].Value + "')"
                cmd2.Parameters.Add(new SqlParameter("@date", (DateTime)dataGridView1.Rows[i].Cells[0].Value));
                cmd2.Parameters.Add(new SqlParameter("@currency", (String)dataGridView1.Rows[i].Cells[1].Value));
                cmd2.Parameters.Add(new SqlParameter("@rate", (Double)dataGridView1.Rows[i].Cells[2].Value));
                //cmd2.Parameters.AddWithValue("@date", SqlDbType.Date).SqlValue = dataGridView1.Rows[i].Cells[0].Value;
                //cmd2.Parameters.AddWithValue("@currency", SqlDbType.NVarChar).SqlValue = currency;
                //cmd2.Parameters.AddWithValue("@rate", SqlDbType.Float).SqlValue = rate;
                //cmd2.Parameters.AddWithValue("@date", SqlDbType.DateTime).SqlValue = date;
                baglanti.Open();
                cmd2.ExecuteNonQuery();
                baglanti.Close();
            }

            baglanti.Open();
            SqlCommand komut = new SqlCommand("Select * from G_Daily", baglanti);
            SqlDataReader oku = komut.ExecuteReader();
            //chart1--Currency    
            chart1.ChartAreas[0].AxisX.Title = "Date";
            chart1.ChartAreas[0].AxisY.Title = "Currency";
            chart1.Series["G_Daily"].LegendText = "Currency/Date";
            chart1.ChartAreas[0].AxisY.Minimum = 70;
            chart1.ChartAreas[0].AxisY.Maximum = 140;
            chart1.ChartAreas[0].Position.Width = 100;
            chart1.ChartAreas[0].Position.Height = 100;
            //chart1.ChartAreas[0].AxisX.LabelStyle.Angle = -90;
            chart1.Series["G_Daily"].ToolTip = "Currency:#VALY\nAverage:#AVG\nMaximum:#MAX\nMinimum:#MIN\n";


            ChartArea CA1 = chart1.ChartAreas[0];
            CA1.AxisX.ScaleView.Zoomable = true;
            CA1.CursorX.AutoScroll = true;
            CA1.CursorX.IsUserSelectionEnabled = true;
            //chart2--Rate
            
            chart2.ChartAreas[0].AxisX.Title = "Date";
            chart2.ChartAreas[0].AxisY.Title = "Rate";
            chart2.Series["G_Daily"].LegendText = "Rate/Date";
            chart2.ChartAreas[0].AxisY.Minimum = 70;
            chart2.ChartAreas[0].AxisY.Maximum = 140;
            chart2.ChartAreas[0].Position.Width = 100;
            chart2.ChartAreas[0].Position.Height = 100;
            //chart2.ChartAreas[0].AxisX.LabelStyle.Angle = -90;
            chart2.Series["G_Daily"].ToolTip = "Rate:#VALY\nAverage:#AVG\nMaximum:#MAX\nMinimum:#MIN\n";
            ChartArea CA2 = chart2.ChartAreas[0];
            CA2.AxisX.ScaleView.Zoomable = true;
            CA2.CursorX.AutoScroll = true;
            CA2.CursorX.IsUserSelectionEnabled = true;
            chart1.Series["G_Daily"].Points.Clear();
            chart2.Series["G_Daily"].Points.Clear();
            List<string> strList = new List<string>();
            while (oku.Read())
            {
               strList.Add(((DateTime)oku[2]).ToString("d"));
                chart1.Series["G_Daily"].Points.AddXY(((DateTime)oku[2]).ToString("d"),oku[0]);
                chart2.Series["G_Daily"].Points.AddXY(((DateTime)oku[2]).ToString("d"), oku[1]);
            }
            //chart1.ChartAreas["ChartArea1"].AxisX.CustomLabels.Clear();
            //chart2.ChartAreas["ChartArea1"].AxisX.CustomLabels.Clear();
            for (int i = 0; i < strList.Count; i++)
            {
                //chart1.ChartAreas["ChartArea1"].AxisX.CustomLabels.Add(i + 0.5, i + 1.5, strList[i]);
                //chart1.ChartAreas["ChartArea1"].AxisX.CustomLabels[i].GridTicks = GridTickTypes.TickMark;
                //chart2.ChartAreas["ChartArea1"].AxisX.CustomLabels.Add(i + 0.5, i + 1.5, strList[i]);
                //chart2.ChartAreas["ChartArea1"].AxisX.CustomLabels[i].GridTicks = GridTickTypes.All;
            }
            baglanti.Close();
        }
    }
}
